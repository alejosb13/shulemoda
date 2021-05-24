<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ["name","product_id"];

    // relacion uno a uno inversa sizes->products
    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    // relacion muchos a muchos sizes->colors
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
