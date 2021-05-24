<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guardef = ["id","created_at","udated_at"];

    // relacion uno a muchos Subcategory->Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // relacion uno a muchos inversa Subcategory->category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
