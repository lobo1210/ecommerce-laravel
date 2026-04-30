<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_usuario_puede_iniciar_sesion()
    {
        // Arrange
        $user = User::factory()->create([
            'password' => bcrypt('123456')
        ]);

        // Act
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '123456'
        ]);

        // Assert
        $response->assertRedirect('/dashboard');
    }
}