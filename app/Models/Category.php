<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    protected $fillable=['category_name','slug'];
    use HasFactory;

    public function setTitleAttribute($value)
{
    $this->attributes['category_name'] = $value;
    $this->attributes['slug'] = Str::slug($value);
}

public function products(){
    return $this->hasMany(Product::class,'category_id');
}
}
