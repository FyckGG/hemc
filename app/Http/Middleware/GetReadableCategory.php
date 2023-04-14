<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request as FacadeRequest;

class GetReadableCategory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $readablePaths = config('constants.urlNames');

        $currentPaths = get_current_routes();

        $categories = explode('/', $request['category']);
        if ($categories[count($categories)-1] == 'product')
        {
            array_pop($categories);
            array_pop($currentPaths);
            array_pop($currentPaths);
        }


        $keyCurrentPaths = [];
        for ($i=1; $i < count($currentPaths); $i++) {
            $keyCurrentPaths[$categories[$i-1]] = $currentPaths[$i];
        }

        $categoriesNames = DB::table('product_types')
            ->select('product_types.id','product_types.type_name')
            ->whereIn('id', $categories)
            ->get();

        foreach ($keyCurrentPaths as $key=>$value) {
            if (!array_search($value, $readablePaths)) {
                $categoryName = "";
                foreach ($categoriesNames as $item) {
                    if ($item->id == $key) {
                        $categoryName = $item->type_name;

                    }
                }
                $categoryName = str_replace('.', '_', $categoryName);
                Config::set("constants.urlNames.$categoryName", $value);
            }
    }

        return $next($request);
    }
}
