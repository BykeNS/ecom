<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model


{
	 use Searchable;


	protected $table = 'products';
    protected $fillable = ['name','desription','price','image','slug'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    
}
