<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductoTest extends TestCase
{
    use RefreshDatabase;

    public function test_usuario_puede_ver_productos()
    {
        // Arrange
        $user = User::factory()->create();
        Producto::factory()->create();

        // Act
        $response = $this->actingAs($user)->get('/productos');

        // Assert
        $response->assertStatus(200);
    }

    public function test_usuario_puede_crear_producto()
    {
        // Arrange
        $user = User::factory()->create();

        // Act
        $response = $this->actingAs($user)->post('/productos', [
            'nombre' => 'Producto Test',
            'descripcion' => 'Descripción',
            'precio' => 100
        ]);

        // Assert
        $response->assertRedirect('/productos');
        $this->assertDatabaseHas('productos', ['nombre' => 'Producto Test']);
    }
}