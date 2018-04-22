<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = 'products';
    protected $fillable = [
        'title', 'description', 'price', 'image'
    ];
} 