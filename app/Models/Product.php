<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    public function getProduct($product) {
        $idResult = DB::table('products')
            ->select('products.id')
            ->where('products.product_name', $product)->get();

        $item_info = DB::table('products')
            ->join('product_details', 'products.id','=', 'product_details.product_id')
            ->join('images', 'products.image_id', '=', 'images.id')
            ->select('products.*', 'product_details.*', 'images.path_to_directory')
            ->where('products.id', $idResult[0]->id)
            ->get();
        return $item_info[0];
    }
}
