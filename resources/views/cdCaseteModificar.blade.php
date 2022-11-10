<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('cdcasetes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg container py-4">
                <form action="{{ route('cdcasete.cdCaseteActualizar', $cdcasete) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row col-md-12">
                        <div class="mb-3 col-md-4">
                        <label class="form-label">Intérprete</label>
                        <input type="text" name="txtInterprete" class="form-control" value="{{ old('txtInterprete', $cdcasete->interprete) }}">
                        </div>
                        <div class="mb-3 col-md-8">
                            <label class="form-label">Descripción</label>
                            <input type="text" name="txtDescripcion" class="form-control" value="{{ old('txtDescripcion', $cdcasete->descripcion) }}">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Número de canciones</label>
                            <input type="number" name="txtNumeroCanciones" class="form-control" value="{{ old('txtNumeroCanciones', $cdcasete->numero_canciones) }}">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" name="txtCantidad" class="form-control" value="{{ old('txtCantidad', $cdcasete->cantidad) }}">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Precio compra</label>
                            <input type="number" name="txtPrecioCompra" class="form-control" value="{{ old('txtPrecioCompra', $cdcasete->precio_compra) }}">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Precio venta</label>
                            <input type="number" name="txtPrecioVenta" class="form-control" value="{{ old('txtPrecioVenta', $cdcasete->precio_venta) }}">
                        </div>
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Fecha de ingreso</label>
                            <input type="date" name="txtFechaIngreso" class="form-control" value="{{ old('txtFechaIngreso', $cdcasete->fecha_ingreso) }}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>