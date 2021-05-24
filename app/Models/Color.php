<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    // relacion muchos a muchos Color->Products
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    // relacion muchos a muchos Color->Sizes
    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
}
