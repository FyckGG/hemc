<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public function getCategories() {
        return DB::table('product_types')
            ->join('images', 'product_types.image_id', '=', 'images.id')
            ->select('product_types.*', 'images.path_to_directory')
            ->where('type_relationship_id', null)
            ->get();

    }

    public function getSubcategories($category) {
        $idResult = DB::table('product_types')
            ->select('product_types.id')
            ->where('product_types.type_name', $category)->get();
        //dd($idResult[0]->id);
        return DB::table('type_relationships')
            ->join('product_types', 'product_types.type_relationship_id', '=', 'type_relationships.id')
            ->join('images', 'product_types.image_id', '=', 'images.id')
            ->select('product_types.*', 'images.path_to_directory')
            ->where('type_relationships.product_type_id', $idResult[0]->id)
            ->get();

    }

    public function getProducts($product) {
        $idResult = DB::table('product_types')
            ->select('product_types.id')
            ->where('product_types.type_name', $product)->get();

        return DB::table('products')
            ->join('images', 'products.image_id', '=', 'images.id')
            ->select('products.id', 'products.product_name', 'images.path_to_directory')
            ->where('products.product_type_id', $idResult[0]->id)
            ->get();
    }
}
