<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
   // use HasFactory;

    protected $fillable = ['type_name'];
    //protected $casts = ['user_id'=>'integer', 'published_at'=>'datetime','published' => 'boolean'];
}
