@extends('layouts.admin')

@section('title', 'Crear Test')

@section('content')
<div class="col-md-9">
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">Agregar un Test</h3>
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('add-test-send-adm') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nombre del test:</label>
                    <input type="text" name="name_test" value="" class="form-control" placeholder="Ingresa el nombre del test...">
                    @if ($errors->has('name_test'))
                        <span class="text-danger">{{ $errors->first('name_test') }}</span>
                    @endif
                </div>
                <div class="btn-group float-right">
                    <button class="btn btn-primary btn-submit">Crear Test</button>
                </div>
            </form>
@endsection
