<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CdCasete as CdCaseteModel;

class cdcasete extends Controller
{
    public function index(){
        $cdcasetes = CdCaseteModel::all();
        return view('cdcasete', compact('cdcasetes'));
    }

    public function nuevoCasete(){
        return view('cdCaseteNuevo');
    }

    public function guardarCasete(Request $request){
        
        CdCaseteModel::create([
            'interprete' => $request->txtInterprete,
            'descripcion' => $request->txtDescripcion,
            'numero_canciones' => $request->txtNumeroCanciones,
            'cantidad' => $request->txtCantidad,
            'precio_compra' => $request->txtPrecioCompra,
            'precio_venta' => $request->txtPrecioVenta,
            'fecha_ingreso' => $request->txtFechaIngreso
        ]);
        return redirect('cdCaseteIndex');
    }

    public function cdCaseteModificar($cdcasete){
        $cdcasete = CdCaseteModel::find($cdcasete);
        return view('cdCaseteModificar', compact('cdcasete'));   
    }

    public function cdCaseteActualizar(Request $request, $cdcaseteId){
        $cdcasete = CdCaseteModel::find($cdcaseteId);
        $cdcasete->update([
            'interprete' => $request->txtInterprete,
            'descripcion' => $request->txtDescripcion,
            'numero_canciones' => $request->txtNumeroCanciones,
            'cantidad' => $request->txtCantidad,
            'precio_compra' => $request->txtPrecioCompra,
            'precio_venta' => $request->txtPrecioVenta,
            'fecha_ingreso' => $request->txtFechaIngreso
        ]);

        return redirect('cdCaseteIndex');
    }

    public function cdCaseteEliminar($cdcaseteId){
        $cdcasete = CdCaseteModel::find($cdcaseteId);
        $cdcasete->delete();
        return redirect('cdCaseteIndex');
    }
}
