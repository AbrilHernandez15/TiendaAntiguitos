<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vinilo as ViniloModel;

class vinilo extends Controller
{
    public function index(){
        $vinilos = ViniloModel::all();
        return view('vinilo', compact('vinilos'));
    }

    public function nuevoVinilo(){
        return view('viniloNuevo');
    }

    public function guardarVinilo(Request $request){
        ViniloModel::create([
            'interprete' => $request->txtInterprete,
            'album' => $request->txtAlbum,
            'disquera' => $request->txtDisquera,
            'lanzamiento' => $request->txtLanzamiento,
            'numero_canciones' => $request->txtNumeroCanciones,
            'cantidad' => $request->txtCantidad,
            'precio_compra' => $request->txtPrecioCompra,
            'precio_venta' => $request->txtPrecioVenta
        ]);
        return redirect('viniloIndex');
    }

    public function viniloModificar($viniloId){
        $vinilo = ViniloModel::find($viniloId);
        return view('viniloModificar', compact('vinilo'));   
    }

    public function viniloActualizar(Request $request, $viniloId){
        $vinilo = ViniloModel::find($viniloId);
        $vinilo->update([
            'interprete' => $request->txtInterprete,
            'album' => $request->txtAlbum,
            'disquera' => $request->txtDisquera,
            'lanzamiento' => $request->txtLanzamiento,
            'numero_canciones' => $request->txtNumeroCanciones,
            'cantidad' => $request->txtCantidad,
            'precio_compra' => $request->txtPrecioCompra,
            'precio_venta' => $request->txtPrecioVenta
        ]);

        return redirect('viniloIndex');
    }

    public function viniloEliminar($viniloId){
        $vinilo = ViniloModel::find($viniloId);
        $vinilo->delete();
        return redirect('viniloIndex');
    }
}
