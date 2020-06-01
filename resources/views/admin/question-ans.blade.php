@extends('layouts.admin')

@section('title', 'Respuesta a '. $question->question_text)

@section('content')
<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ __('Pregunta:') }} {{ $question->question_text }}</h4>


            <p>{{ __('a)') }} {{ $question->option->op_a }}</p>
            <p>{{ __('b)') }} {{ $question->option->op_b }}</p>
            <p>{{ __('c)') }} {{ $question->option->op_c }}</p>
            <p>{{ __('Inciso correcto: ') }} {{ $question->option->correct_op }}</p>
        </div>
    </div>
</div>
@endsection
