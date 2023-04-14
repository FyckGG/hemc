<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class GetReadableProduct
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
        $item = $request['item'];
        $productName = DB::table('products')->
        select('products.id','products.product_name')
            ->where('id', $item)
            ->get();
        if (!array_search($currentPaths[count($currentPaths) -1], $readablePaths)) {
            $replacedName = str_replace('.', '_', $productName[0]->product_name);
            Config::set("constants.urlNames.$replacedName", $currentPaths[count($currentPaths) -1]);
        }
        return $next($request);
    }
}
