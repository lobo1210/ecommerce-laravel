<h1>Checkout</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@if(empty($carrito))
    <p>El carrito está vacío</p>
@else

<table border="1">
    <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Subtotal</th>
    </tr>

    @php $total = 0; @endphp

    @foreach($carrito as $item)
        @php
            $subtotal = $item['precio'] * $item['cantidad'];
            $total += $subtotal;
        @endphp

        <tr>
            <td>{{ $item['nombre'] }}</td>
            <td>${{ $item['precio'] }}</td>
            <td>{{ $item['cantidad'] }}</td>
            <td>${{ $subtotal }}</td>
        </tr>
    @endforeach
</table>

<h3>Total: ${{ $total }}</h3>

<form action="{{ route('checkout.procesar') }}" method="POST">
    @csrf
    <button type="submit">Finalizar compra</button>
</form>

@endif

<a href="{{ route('carrito.index') }}">Volver al carrito</a>