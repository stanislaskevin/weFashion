<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'image', 'description', 'reference', 'categorie_id',  'size', 'public', 'solde'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categories::class ,'categories_product', 'products_id');
    }
}
