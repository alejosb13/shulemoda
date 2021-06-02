<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    // relacion muchos a muchos category->brands
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // relacion muchos a muchos category->brands
    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

}
