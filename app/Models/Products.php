<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'stock'];

    public function orderDetails()
    {
        return $this->hasMany(Order_details::class);
    }
}
