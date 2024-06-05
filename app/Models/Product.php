<?php

namespace App\Models;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'description'];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}