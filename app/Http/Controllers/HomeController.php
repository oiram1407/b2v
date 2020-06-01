<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test as tst;
use App\TestAssigned as tsta;

class HomeController extends Controller
{

    public function apiTest($id){ //Genera la api para ver tests /test/{id}

        $test = tst::where('id_test', $id)->first(); //Realiza la consulta al modelo de test
        $users = tsta::where('id_test', $id)->with('users','tests')->find(1); //Realiza la consulta con la relacion de los tres modelos(test_assigned, test, users)

        if(!$test){ //Si no es correcta la petición (existenxia) del id del test mandamos un error
          return response()->json([
              'error' => 'No existe el test solicitado'
          ]);
        }

        return response()->json([ //Creamos el JSON para poder enviar la información si es solicitada del test con usuarios asignados
            'name_test' => $test->name_test,
            'users' => [
                'user_name' => $users->users->name,
                'user_email' => $users->users->email
            ]
        ]);
    }

    public function apiUser($id){ //Genera la api para ver usuarios /user/{id}
        $users = tsta::where('id_user', $id)->with('users','tests')->find(1); //Realiza la consulta con la relacion de los tres modelos(test_assigned, test, users)

        if(!$users){
          return response()->json([ //Si no es correcta la petición (existenxia) del id del usuario mandamos un error
              'error' => 'No existe el usuario solicitado'
          ]);
        }

        return response()->json([ //Creamos el JSON para poder enviar la información si es solicitada del usuario con sus calificaciónes de cada test
            'user' => [
                'user_name' => $users->users->name,
                'user_email' => $users->users->email,
                'tests' => [
                  'id_test' => $users->id_test,
                  'name_test' => $users->tests->name_test,
                  'grade_test' => $users->grade
                ]
            ]
        ]);
    }
}
