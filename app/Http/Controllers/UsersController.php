<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        $users = User::all();

        return view("users.index")->with('users',$users);
    }

    //Route Model Binding (cuando tienes una ruta qu recibe como parametro una variable y
    // lo mapeas a una clase especifica como 'User' en el controlador entiende que debe injectar automaticamente la primera fila de su llave primera y como resultado despliega la informacion de la llave primaria de la primera fila que se ingreso como parametro en la ruta.
    
    public function show(User $user){
        return $user;
    }

    //Si no quieres utilizar ROUTE MODEL BINDING y solo quieres utilizar los metodos del ORM, seria de esta manera. Se crea otro metodo con otra ruta para este ejemplo
    public function show2($id){
        $user = User::find($id); // despliega toda la informacion encontrada en la primera <fila></fila>
        return $user;
    }
}
