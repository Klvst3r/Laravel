<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
     /**
     * @test
     */
    function it_shows_the_user_list()
    {
         $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de usuarios')
        ->assertSee('Joel')
        ->assertSee('Ellie');
    }

    /**
     * @test
     */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
         $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('No hay Usuarios Registrados');
    }

    /*function it_loads_the_user_list_page()
    {
        //$this->assertTrue(true);
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }
         $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de usuarios')
        ->assertSee('Joel')
        ->assertSee('Ellie');
    }*/

    /**
     * @test
     */
    function it_loads_the_user_details_page()
    {
    	$this->get('/usuarios/5')
    	->assertStatus(200)
    	->assertSee('Mostrando detalle del usuario: 5');
    }

    /**
     * @test
     */
    function it_loads_the_new_users_page(){
    	$this->get('/usuarios/nuevo')
    	->assertStatus(200)
    	->assertSee('Crear nuevo usuario');
    }
}
