<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura; 
use App\Models\Producto; 
use App\Models\Descripcion; 
class FacturaController extends Controller
{

public function create($item){
    $productos = Producto::paginate('50'); 
    $descripcion = Descripcion::paginate('50'); 

    return view('facturacion.fac', compact('item', 'productos', 'descripcion')); 
}




    public function store(Request $request){
        $request->validate([
            'users_id'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'nit'=>'required',
            'correo'=>'required',
            'nombre_producto'=>'required',
            'tipo'=>'required',
            'precio'=>'required',
            'descripcion'=>'required',
            'venta_alquiler'=>'required', 
            'tipo_pago'=>'required'
        ]); 

        $factura = $request->all(); 

        Factura::create($factura); 
        return view('/facturacion.facturar', compact('factura')); 
    }
    
}
