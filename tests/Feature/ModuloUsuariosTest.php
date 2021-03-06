<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Usuario;

class ModuloUsuariosTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function prueba_vista_lista_de_todos_los_usuarios_con_usuarios()
    {
    

    	$this->get('/usuarios')
    		->assertStatus(200)
            ->assertSee('Natsu')
            ->assertSee('Lucy');	
    }
    /*
    public function prueba_vista_lista_de_todos_los_usuarios_sin_usuarios(){
        

        $this->get('usuarios')
            ->assertStatus(200)
            ->assertSee('No existen usuarios registrados');
    }*/

    /** @test */
    public function prueba_vista_identificado_por_id()
    {   
        $usuario = Usuario::find(2);
        /////// Buscamos al usuario y pasamos el id concatenando a la ruta para pasar el id esto en la prueba nada mas
    	$this->get('/usuarios/'.$usuario)
    		->assertStatus(200)
    		->assertSee('Natsu');
    }
    /** @test */
    public function vista_crear_nuevo_usuario(){
        $this->get('/usuarios/nuevo')
    		->assertStatus(200)
    		->assertSee('Esta es la vista donde entrara el formulario de creacion de usuario');
    }
    /** @test */
    public function vista_con_parametros(){
    	$this->get('/usuarios/datos/Jeral/Fernandez')
    		->assertStatus(200)
    		->assertSee('Esta es la vista del usuario: Jeral y de apellido: Fernandez');
    }
    /** @test */
    public function vista_con_datos_no_obligatorios_o_por_defecto_no_colocados(){
    	$this->get('/usuarios/cargo/Jeral/Fernandez/')
    		->assertStatus(200)
    		->assertSee("Mi nombre es: Jeral  \n Mi apellido es: Fernandez \n Mi cargo es: Empleado medio tiempo \n Mi edad es: No quiero decirla XD");
    }
    /** @test */	
    public function vista_con_datos_no_obligatorios_o_por_defecto_colocados(){
    	
    	//$this->withoutExeptionHandling();

    	$this->get('/usuarios/cargo/Jeral/Fernandez/Administrador/24')
    		->assertStatus(200)
    		->assertSee("Mi nombre es: Jeral  \n Mi apellido es: Fernandez \n Mi cargo es: Administrador \n Mi edad es: 24");
    }

}
