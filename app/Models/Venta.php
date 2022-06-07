<?php

namespace App\Models;

use App\Models\Admin\Producto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected   $fillable =['nombre', 'stock'];

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
