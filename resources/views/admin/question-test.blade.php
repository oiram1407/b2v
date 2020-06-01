@extends('layouts.admin')

@section('title', 'Agregar preguntas a '. $id)

@section('content')
<div class="col-md-9">
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title">
                Agregar pregunta
                <span class="float-right">
                    <button type="button" name="button" data-toggle="collapse" class="btn btn-light" data-target="#question-to-test-form" aria-expanded="false" aria-controls="question-to-test-form">
                        <i class="fas fa-grip-lines"></i>
                    </button>
                </span>
            </h3>
            <form class="collapse" action="index.html" method="post" id="question-to-test-form">
                <div class="form-group">
                    <label>Pregunta:</label>
                    <input type="text" name="question_text" value="" class="form-control" placeholder="Ingresa el texto de la pregunta...">
                </div>
                <div class="form-group">
                    <label>Opción a:</label>
                    <input type="text" name="question_text" value="" class="form-control" placeholder="Ingresa la opción a...">
                </div>
                <div class="form-group">
                    <label>Opción b:</label>
                    <input type="text" name="question_text" value="" class="form-control" placeholder="Ingresa la opción b...">
                </div>
                <div class="form-group">
                    <label>Opción c:</label>
                    <input type="text" name="question_text" value="" class="form-control" placeholder="Ingresa la opción c...">
                </div>
                <div class="form-group">
                    <label>Opción correcta:</label> <small class="text-muted">Solo inciso</small>
                    <input type="text" name="question_text" value="" class="form-control" placeholder="Ingresa el iniciso correcto...">
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
                            <th class="text-center">{{ __('Pregunta') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($questions as $qu)
                        <tr>
                            <td class="text-center">{{ $qu->question_text }}</td>
                            <td class="text-center">
                              <span class="badge badge-primary p-2">
                                  <a href="{{ Route('view-questions-ans-adm', ['id' => $qu->id_question]) }}" style="color: #FFF"><i class="far fa-eye"></i> {{ __('Ver Respuestas') }}</a>
                              </span>
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
