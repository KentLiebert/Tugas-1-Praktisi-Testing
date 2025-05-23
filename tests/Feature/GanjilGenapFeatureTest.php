<?php

namespace Tests\Feature;

use Tests\TestCase;

class GanjilGenapFeatureTest extends TestCase
{
    public function test_page_loads()
    {
        $response = $this->get('/cek-ganjil-genap');
        $response->assertStatus(200);
        $response->assertSee('Deteksi Bilangan Ganjil atau Genap');
    }

    public function test_input_genap()
    {
        $response = $this->post('/cek-ganjil-genap', ['number' => 8]);
        $response->assertSee('Bilangan Genap');
    }

    public function test_input_ganjil()
    {
        $response = $this->post('/cek-ganjil-genap', ['number' => 9]);
        $response->assertSee('Bilangan Ganjil');
    }
}
