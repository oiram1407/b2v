<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestAssigned as tsta;
use App\Question as qu;
use Auth;

class UserController extends Controller
{
    public function __construct(){

    }

    public function index(){ //Método que muestra los tests asignados a el usuario actual
      $data = array(
          'tests' => tsta::where('id_user', Auth::id())->with('tests')->get()
      );

      return view('home', $data);
    }

    public function viewTest($id){ //metodo que muestra el test al que se ingresa
        $test = tsta::where('id_user', Auth::id())->where('id_test', $id)->with('tests')->first();

        $data = array(
            'test' => $test,
            'questions' => qu::where('id_test', $test->id_test)->orderBy('id_question')->with('option')->get()
        );

        return view('view-test', $data);
    }

}
