<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Vinilos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg container py-4">
                <form action="{{ route('vinilo.guardarVinilo') }}" method="POST">
                    @csrf
                    <div class="row col-md-12">
                        <div class="mb-3 col-md-4">
                        <label class="form-label">Intérprete</label>
                        <input type="text" name="txtInterprete" class="form-control">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Álbum</label>
                            <input type="text" name="txtAlbum" class="form-control">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Disquera</label>
                            <input type="text" name="txtDisquera" class="form-control">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Lanzamiento</label>
                            <input type="date" name="txtLanzamiento" class="form-control">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Número de canciones</label>
                            <input type="number" name="txtNumeroCanciones" class="form-control">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" name="txtCantidad" class="form-control">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Precio compra</label>
                            <input type="number" name="txtPrecioCompra" class="form-control">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Precio venta</label>
                            <input type="number" name="txtPrecioVenta" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>