<?php

namespace App\Controllers;
use App\Models\mUsuarios;
use App\Models\mGastos;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    //=====================================================================================================================================================
    //Usuarios
        //Login
    public function login(){
        return view('vLogin');
    }

        //Registro ususario
    public function registro_us(){
        return view('vRegistro');
    }
    
        //registrar nuevo ususario
    public function insertarForm_us(){
        $mUsuarios = new mUsuarios();
        
        $nuevoUsuario = [                     
            "correo_electronico" => $_POST['correo_electronico'],
            "contrasenia" => $_POST['contrasenia']            
        ];

        $mUsuarios -> insert($nuevoUsuario);
        
        $datoId['idRegistrado'] = $mUsuarios -> db -> insertID();

        return view("vSuccess_us", $datoId);
    }

        //Ingresar al ususario
    public function ingresarForm_us(){
        $mUsuarios = new mUsuarios();
        $correo_electronico = $_POST['correo_electronico'];
        $contrasenia = $_POST['contrasenia'];
        $user = $mUsuarios -> where('correo_electronico', $correo_electronico) -> where('contrasenia', $contrasenia) -> first();
        
        return view("vIngreso", $user);
    }    

        //Buscar registro
    public function buscarRegistro_us(){
        $mUsuarios = new mUsuarios();
        $id_usuario = $_POST['id_usuario'];
        $usuario = $mUsuarios -> find($id_usuario);
        return view("vRegistroEncontrado", $usuario);     
    }

        //Actualizar registro
    public function actualizarRegistro_us(){
        $mUsuarios = new mUsuarios();
        $id_usuario = $_POST['id_usuario'];
        $usuarioActualizado = ["correo_electronico" => $_POST['correo_electronico'], "contrasenia" => $_POST['contrasenia']];
        $mUsuarios -> update($id_usuario, $usuarioActualizado);

        $user = $mUsuarios -> where('correo_electronico', $_POST['correo_electronico']) -> where('contrasenia', $_POST['contrasenia']) -> first();

        return view("vIngreso", $user); 
    }

        //Eliminar registro
    public function eliminarRegistro_us($id){
        $mUsuarios = new mUsuarios();
        $id_usuario = $id;
        $mUsuarios -> delete($id_usuario);

        //checar Funcionalidad
        $todos_gasto = $mGastos->findAll();
        $gasto = array('gasto'=>$todos_gasto);


        $mGastos -> delete($gasto, $id_usuario);
        
        return view('vLogin');
    }




//=====================================================================================================================================================
    //Gastos


    public function mostrarRegistros(){
        $mUsuarios = new mUsuarios();
        $todos = $mUsuarios->findAll();
        $usuarios = array('usuarios'=>$todos);

        return view("vRegistros",$usuarios);
    }

    public function buscarRegistro(){
        $mUsuarios = new mUsuarios();
        $id_usuario = $_POST['id_usuario'];
        $usuario = $mUsuarios -> find($id_usuario);
        return view("vRegistroEncontrado", $usuario);   
    }
}

?>