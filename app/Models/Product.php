<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'condition', 'image', 'description', 'category', 'user_id', "product_id", "cover_image", "uniqueId", "category_name"];

    public function User()

    {

        return $this->belongsToMany(User::class, 'role_user');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function Buyer()

    {

        return  $this->belongsTo(Buyer::class, 'role_user');
    }
}
