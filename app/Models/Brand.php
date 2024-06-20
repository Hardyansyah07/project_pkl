<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['nama_brand'];
    protected $visible = ['nama_brand'];

    public function Product()
    {
        return $this->hasMany(Product::class, 'id_brand');
    }
}
