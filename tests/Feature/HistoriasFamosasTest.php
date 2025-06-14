<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\HistoriaFamosa;

class HistoriasFamosasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function la_pagina_historiasfamosas_carga_correctamente()
    {
       
        HistoriaFamosa::factory()->count(5)->create();

        
        $response = $this->get('/historiasfamosas');

        $response->assertStatus(200);
        $response->assertSeeText('Paranormal Grandes Historias');
        $response->assertViewHas('historias');
    }
}
