@extends('layouts.app')

@section('title', $test->tests->name_test)

@section('content')
<div class="container">
    @if(!$test)
    <div class="alert alert-danger" role="alert">
        <p class="text-center font-weight-normal">El test al que tratas de acceder no existe.</p>
        <p class="text-center font-weight-normal"><a href="{{ Route('home') }}">Volver al inicio</a></p>
    </div>
    @elseif($test->solved == 1)
    <div class="alert alert-success" role="alert">
        <p class="text-center font-weight-normal">Gracias por contestar el test</p>
        <p class="text-center font-weight-normal"><a href="{{ Route('home') }}">Volver al inicio</a></p>
    </div>
    @else
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><span class="font-weight-bold">{{ __('Test:') }}</span> {{ $test->tests->name_test }}</h3>
            <form action="index.html" method="post">
                @csrf
                @foreach($questions as $qu)
                <div class="form-group">
                    <label>{{ $qu->question_text }}</label><br />
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="response" value="a">
                        <label class="form-check-label">{{ $qu->option->op_a }}</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="response" value="b">
                        <label class="form-check-label">{{ $qu->option->op_b }}</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="response" value="c">
                        <label class="form-check-label">{{ $qu->option->op_c }}</label>
                    </div>
                </div>
                @endforeach
                <div class="btn-group float-right">
                    <button type="button" name="button" class="btn btn-primary">Responder</button>
                </div>
            </form>
        </div>
    </div>
    @endif
</div>
@endsection
