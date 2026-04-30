<h1>Editar Producto</h1>

<form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}"><br>

    <label>Descripción:</label>
    <textarea name="descripcion">{{ $producto->descripcion }}</textarea><br>

    <label>Precio:</label>
    <input type="number" name="precio" value="{{ $producto->precio }}"><br>
	
	<label>Imagen:</label>
    <input type="file" name="imagen"><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('productos.index') }}">Volver</a>