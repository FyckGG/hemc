<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        $product = new Category();
        $types = $product->getCategories();
        return view('products.index', compact('types'));
    }

    public function category(Request $request) {
        $category = stripos($request['category'], '/') ?
            substr($request['category'], strripos($request['category'], '/') +1):
        $request['category'];

        $product = new Category();

        $types = $product->getSubcategories($category);
        $products= $product->getProducts($category);

        return view('products.index', compact('types', 'products'));


    }


    public function item(Request $request) {
        $item = $request['item'];
        $product = new Product();
        $item_info = $product->getProduct($item);
        return view('products.item', compact('item_info'));


    }
}
