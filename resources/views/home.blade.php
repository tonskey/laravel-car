@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            Привітіння
            @if (auth()->check())
              <strong>
                {{ auth()->user()->name }}
              </strong>
            @endif
          </div>

          <div class="panel-body">
              Ти маєте доступ до
              <a href="{{ route('car.index') }}">автомобілів</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
