<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarritoTest extends TestCase
{
    use RefreshDatabase;

    public function test_usuario_puede_agregar_al_carrito()
    {
        // Arrange
        $user = User::factory()->create();
        $producto = Producto::factory()->create();

        // Act
        $response = $this->actingAs($user)->post("/carrito/agregar/{$producto->id}");

        // Assert
        $response->assertRedirect();
        $this->assertNotEmpty(session('carrito'));
    }
}
