<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function index() {

        $types = DB::table('product_types')
            ->join('images', 'product_types.image_id', '=', 'images.id')
            ->select('product_types.*', 'images.path_to_directory')
            ->where('type_relationship_id', null)
            ->get();
        return view('products.index', compact('types'));
    }

    public function category(Request $request) {
        $category = stripos($request['category'], '/') ?
            substr($request['category'], strripos($request['category'], '/') +1):
        $request['category'];


        $types = DB::table('type_relationships')
            ->join('product_types', 'product_types.type_relationship_id', '=', 'type_relationships.id')
            ->join('images', 'product_types.image_id', '=', 'images.id')
            ->select('product_types.*', 'images.path_to_directory')
            ->where('type_relationships.product_type_id', $category)
            ->get();

        $products = DB::table('products')
            ->join('images', 'products.image_id', '=', 'images.id')
            ->select('products.id', 'products.product_name', 'images.path_to_directory')
            ->where('products.product_type_id', $category)
            ->get();

       $dc = compact('types');
       //dd($dc);
        return view('products.index', compact('types', 'products'));


    }


    public function item(Request $request) {
        $item = $request['item'];
        $item_info = DB::table('products')
            ->join('product_details', 'products.id','=', 'product_details.product_id')
            ->join('images', 'products.image_id', '=', 'images.id')
            ->select('products.*', 'product_details.*', 'images.path_to_directory')
            ->where('products.id', $item)
            ->get();
        $item_info = $item_info[0];
        return view('products.item', compact('item_info'));


    }
}
