<h1>Crear Producto</h1>

<form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre"><br>

    <label>Descripción:</label>
    <textarea name="descripcion"></textarea><br>

    <label>Precio:</label>
    <input type="number" name="precio"><br>
	
	<label>Imagen:</label>
    <input type="file" name="imagen"><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('productos.index') }}">Volver</a>