<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as usr;
use App\Test as tst;
use App\TestAssigned as tsta;
use App\Question as qu;

class AdminController extends Controller
{
    public function index()
    {//Método prinicipal, solo muestra panel
        return view('admin.home');
    }

    public function viewUsers()
    {//Método para ver la lista de usuarios
        $data = array(
          'users' => usr::orderBy('id', 'desc')->get()
        );

        return view('admin.users', $data);
    }

    public function viewTests()
    { // Metodo para ver la lista de tests
        $data = array(
            'tests' => tst::orderBy('id_test', 'desc')->get()
        );

        return view('admin.tests', $data);
    }

    public function addTestForm()
    { //Método para ver el formulario de agregar test
        return view('admin.add-test');
    }

    public function addTest(Request $request)
    { //Método para validar y añadir(no hecho) un test a la base de datos
        $request->validate([
            'name_test' => 'required|max:255'
        ], [
            'name_test.required' => 'Es necesario rellenar el campo de nombre',
            'name_test.max' => 'El nombre del test debe ser máxim de 255 catacteres',
        ]);

        return back()->with('success', 'El test se ha creado correctamente.');
    }

    public function assignTest($id)
    { //Metodo que muestra los usuarios asignados a un test así como la información del usuario referente al test
        // $users_assigned = tsta::where('id_test', $id)->find(1)->users()->get();

        $data = array(
          'id' => $id,
          'users_assigned' => tsta::where('id_test', $id)->with('users','tests')->get()
        );

        return view('admin.view-test', $data);
    }

    public function questionTest($id)
    { //Método para ver las preguntas que se han añadido al test
        $data = array(
            'id' => $id,
            'questions' => qu::where('id_test', $id)->orderBy('id_question')->get()
        );

      return view('admin.question-test', $data);
    }

    public function questionAns($id)
    { //Método para ver las respuesta a determinada pregunta
      $question = qu::where('id_test', $id)->first();

      $data = array(
        'question' => qu::where('id_test', $id)->orderBy('id_question')->with('option')->first()
      );

      return view('admin.question-ans', $data);
    }
}
