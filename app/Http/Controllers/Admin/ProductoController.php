<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
  
    public function index()
    {
        $productos = Producto::all();

        return view('admin.productos.index', compact('productos'));
    }

  
    public function create()
    {
        return view('admin.productos.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'stock' => 'required'
        ]);

        $producto = Producto::create($request->all());

        return redirect()->route('admin.productos.edit', compact('producto'))->with('info', 'El producto se creó correctamente.');
    }


    public function show(Producto $producto)
    {
        return view('admin.productos.show', compact('producto'));
    }


    public function edit(Producto $producto)
    {
        return view('admin.productos.edit', compact('producto'));
    }


    public function update(Request $request,Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'categoria' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'stock' => 'required'
        ]);

        $producto->update($request->all());

        return redirect()->route('admin.productos.edit', compact('producto'))->with('info', 'El producto se modificó correctamente.');
        
    }

 
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('admin.productos.index')->with('info', 'La venta se elimino correctamente.');
    }
}
