@extends('layouts.app')

@section('content')
  <div class="container">

    <form method="POST" action="/car">

      <div class="clearfix">
        <div class="pull-left">
          <div class="lead">
            <strong>Створити новий автомобіль</strong>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-success">Зберегти</button>
          <a href="/car" class="btn btn-default">Назад до списку</a>
        </div>
      </div>
      <hr>

      @include('car.form')
    </form>

  </div>
@endsection
