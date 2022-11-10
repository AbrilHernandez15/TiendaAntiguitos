<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Vinilos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a type="button" class="btn btn-primary my-3 ms-3" href="{{ route('vinilo.nuevo') }}">+ Nuevo</a>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Interprete</th>
                        <th scope="col">Álbum</th>
                        <th scope="col">Disquera</th>
                        <th scope="col">Lanzamiento</th>
                        <th scope="col">Número de canciones</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio de compra</th>
                        <th scope="col">Precio de venta</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($vinilos as $vinilo)
                        <tr>
                            <td scope="row">{{ $vinilo->id }}</td>
                            <td scope="row">{{ $vinilo->interprete }}</td>
                            <td scope="row">{{ $vinilo->album }}</td>
                            <td scope="row">{{ $vinilo->disquera }}</td>
                            <td scope="row">{{ $vinilo->lanzamiento }}</td>
                            <td scope="row">{{ $vinilo->numero_canciones }}</td>
                            <td scope="row">{{ $vinilo->cantidad }}</td>
                            <td scope="row">{{ $vinilo->precio_compra }}</td>
                            <td scope="row">{{ $vinilo->precio_venta }}</td>
                            <td>
                                <div class="d-flex">
                                    <a type="button" class="btn btn-warning my-3 ms-3" href="{{ route('vinilo.modificarVinilo', $vinilo) }}">Editar</a>
                                    <form action="{{ route('vinilo.viniloEliminar', $vinilo) }}" method="POST">
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