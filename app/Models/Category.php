<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ["name","slug","image","icon"];


    // relacion uno a muchos category->subcategories
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    // relacion muchos a muchos category->brands
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    // relacion a través de Category->Subcategory->Products
    public function products()
    {
        return $this->hasManyThrough(Product::class,Subcategory::class);
    }

    public function getRouteKeyname()
    {
        return "slug";
    }
}
