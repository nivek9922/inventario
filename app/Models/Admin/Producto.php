<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected   $fillable =['nombre' , 'referencia', 'categoria', 'precio', 'peso', 'stock'];
}
