<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CD Casetes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a type="button" class="btn btn-primary my-3 ms-3" href="{{ route('cdcasete.nuevoCasete') }}">+ Nuevo</a>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Interprete</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Número de canciones</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio de compra</th>
                        <th scope="col">Precio de venta</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($cdcasetes as $cdcasete)
                        <tr>
                            <td scope="row">{{ $cdcasete->id }}</td>
                            <td scope="row">{{ $cdcasete->interprete }}</td>
                            <td scope="row">{{ $cdcasete->descripcion }}</td>
                            <td scope="row">{{ $cdcasete->numero_canciones }}</td>
                            <td scope="row">{{ $cdcasete->cantidad }}</td>
                            <td scope="row">{{ $cdcasete->precio_compra }}</td>
                            <td scope="row">{{ $cdcasete->precio_venta }}</td>
                            <td scope="row">{{ $cdcasete->fecha_ingreso }}</td>
                            <td>
                                <div class="d-flex">
                                    <a type="button" class="btn btn-warning my-3 ms-3" href="{{ route('cdcasete.cdCaseteModificar', $cdcasete) }}">Editar</a>
                                    <form action="{{ route('cdcasete.cdCaseteEliminar', $cdcasete) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger my-3 ms-3">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>