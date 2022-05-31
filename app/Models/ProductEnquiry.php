<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEnquiry extends Model
{
    use HasFactory;
    protected $fillable=['name','number','subject','email','message','product_id'];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
