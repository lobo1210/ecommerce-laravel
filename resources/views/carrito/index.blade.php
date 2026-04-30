<h1>Carrito de Compras</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
        <th>Acciones</th>
    </tr>

    @php $total = 0; @endphp

    @foreach($carrito as $id => $item)
        @php
            $subtotal = $item['precio'] * $item['cantidad'];
            $total += $subtotal;
        @endphp

        <tr>
            <td>{{ $item['nombre'] }}</td>
            <td>${{ $item['precio'] }}</td>
            <td>{{ $item['cantidad'] }}</td>
            <td>${{ $subtotal }}</td>
            <td>
                <form action="{{ route('carrito.eliminar', $id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<h3>Total: ${{ $total }}</h3>

<a href="{{ route('productos.index') }}">Seguir comprando</a>
<a href="{{ route('checkout.index') }}">Ir a pagar</a>