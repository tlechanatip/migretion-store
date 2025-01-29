<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number', 'address'];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
