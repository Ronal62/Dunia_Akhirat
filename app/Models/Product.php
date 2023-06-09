<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price'];
    protected $table = 'products';
    protected $primaryKey = 'id';

    public $incrementing = true;
    public $timestamps = true;
}
