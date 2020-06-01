@extends('layouts.admin')

@section('title', 'Nombre de test'. $id)

@section('content')
<div class="col-md-9">
    <div class="card mb-4">
        <div class="card-body">
            <h3>
                Asignar test a un usuario
                <span class="float-right">
                    <button type="button" name="button" data-toggle="collapse" class="btn btn-light" data-target="#assign-test-form" aria-expanded="false" aria-controls="assign-test-form">
                        <i class="fas fa-grip-lines"></i>
                    </button>
                </span>
            </h3>
            <form class="collapse" action="index.html" method="post" id="assign-test-form">
                <div class="form-group">
                    <label>Email del usuario</label>
                    <input type="email" name="email" value=""  class="form-control" placeholder="Ingresa el email del usuario...">
                </div>
                <div class="btn-group float-right">
                    <button type="submit" name="button" class="btn btn-primary">Asignar</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">Nombre de Usuario</th>
                            <th class="text-center">Calificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users_assigned as $u)
                        <tr>
                            <td class="text-center">{{ $u->users->name }}</td>
                            <td class="text-center">{{ $u->grade }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
