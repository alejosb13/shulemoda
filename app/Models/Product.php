<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guardef = ["id","created_at","udated_at"];

    // relacion uno a muchos inversa Product->Size
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    // relacion uno a muchos inversa Product->Brands
    public function category()
    {
        return $this->belongsTo(Brand::class);
    }

    // relacion uno a muchos inversa Product->subcategory
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // relacion muchos a muchos inversa Product->Color
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function images()
    {
        return $this->morphToMany(Image::class,"imageable");
    }

}
