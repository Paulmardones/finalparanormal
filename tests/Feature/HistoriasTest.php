<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\HistoriaFamosa;

class HistoriasTest extends TestCase
{
    use RefreshDatabase;

    public function test_historias_index_muestra_vista_con_datos()
    {
        $historia = HistoriaFamosa::factory()->create();

        $response = $this->get('/historiasfamosas');

        $response->assertStatus(200);
        $response->assertSee($historia->titulo);
    }

    public function test_crear_historia_valida()
    {
        Storage::fake('public');

        $response = $this->post(route('historias.store'), [
            'titulo' => 'Mi encuentro extraterrestre',
            'contenido' => 'Fue una noche oscura...',
            'imagen' => UploadedFile::fake()->image('ovni.jpg'),
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('historias_famosas', [
            'titulo' => 'Mi encuentro extraterrestre',
        ]);
    }

    public function test_error_al_crear_historia_sin_datos()
    {
        $response = $this->post(route('historias.store'), []);

        $response->assertSessionHasErrors(['titulo', 'contenido']);
    }

    public function test_eliminar_historia()
    {
        $historia = HistoriaFamosa::factory()->create();

        $response = $this->delete(route('historias.destroy', $historia->id));

        $response->assertRedirect();
        $this->assertDatabaseMissing('historias_famosas', [
            'id' => $historia->id,
        ]);
    }
}
