<h1>Lista de Productos</h1>

<a href="{{ route('productos.create') }}">Crear Producto</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Acciones</th>
		<th>Imagen</th>
    </tr>

    @foreach($productos as $producto)
    <tr>
        <td>{{ $producto->id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>${{ $producto->precio }}</td>
        <td>
		<td>
            @if($producto->imagen)
                <img src="{{ asset('storage/'.$producto->imagen) }}" width="80">
            @endif
        </td>
            <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>

            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
			<form action="{{ route('carrito.agregar', $producto->id) }}" method="POST">
                @csrf
                <button type="submit">Agregar al carrito</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>