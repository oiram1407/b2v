@extends('layouts.admin')

@section('title', 'Tests')

@section('content')
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <span class="btn-group float-right mb-2">
                    <button type="button" name="button" class="btn btn-dark" onclick="window.location.href='{{ Route('add-test-adm') }}'">
                        <i class="far fa-file-alt"></i> {{ __('Crear Nuevo Test') }}
                    </button>
                </span>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">{{ __('Nombre') }}</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tests as $ts)
                            <tr>
                                <td class="text-center">{{ $ts->name_test }}</td>
                                <td class="text-center">
                                  <span class="badge badge-primary p-2"><a href="{{ Route('view-assigns-adm' , ['id' => $ts->id_test]) }}" style="color: #FFF"><i class="fas fa-clipboard-list"></i> {{ __('Asignados') }}</a></span>
                                  <span class="badge badge-success p-2"><a href="{{ Route('view-questions-adm' , ['id' => $ts->id_test]) }}" style="color: #FFF"><i class="fas fa-plus"></i> {{ __('Preguntas') }}</a></span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
