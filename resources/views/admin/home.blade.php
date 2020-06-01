@extends('layouts.admin')

@section('title', 'Administración')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <p class="card-text">Bienvenido {{ Auth::guard('admin')->user()->name }} en este panel podrás revisar los test resueltos, disponibles y la calificación obtenida por cada usuario.</p>
            </div>
        </div>
    </div>
@endsection
