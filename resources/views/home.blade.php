@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-weight-bold text-center mb-4">Test Disponibles</h3>
    <div class="row row-cols-1 row-cols-md-3">
        @foreach($tests as $test)
        <div class="col mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-weight-bold text-center">
                        <a href="{{ route('view-test-user', ['id' => $test->id_test]) }}">{{ $test->tests->name_test }}</a>
                    </div>
                    @if($test->solved == 1)
                    <span class="badge badge-success"><i class="fas fa-check"></i> {{ __('Resuelto') }}</span>
                    @else
                    <span class="badge badge-warning"><i class="fas fa-exclamation"></i> {{ __('Pendiente') }}</span>
                    @endif
                    <div class="btn-group float-right">
                        <button type="button" onclick="window.location.href='{{ route('view-test-user', ['id' => $test->id_test]) }}'" name="button" class="btn btn-primary">{{ __('Ver') }}</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
