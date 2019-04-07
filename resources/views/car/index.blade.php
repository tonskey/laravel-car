@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="clearfix">
      <div class="pull-left">
        <div class="lead">Автомобілі</div>
      </div>
      <div class="pull-right">
        <a href="/car/add" class="btn btn-success">Додати новий автомобіль</a>
      </div>
    </div>

    <hr>

    <table class="table table-bordered table-hover table-striped">
      <thead>
      <tr>
        <th class="col-xs-1">
          ID
          <div class="pull-right">
            <a href="?sortby=id&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('id', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=id&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('id', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
            Модель
          <div class="pull-right">
            <a href="?sortby=model&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('model', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=model&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('model', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
          Марка
          <div class="pull-right">
            <a href="?sortby=marka&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('marka', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=marka&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('marka', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
            Рік випуску
          <div class="pull-right">
            <a href="?sortby=year&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('year', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=year&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('year', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
          Тип кузова
          <div class="pull-right">
            <a href="?sortby=body_type&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('body_type', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=body_type&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('body_type', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
          Потужність двигуна
          <div class="pull-right">
            <a href="?sortby=capacity&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('capacity', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=capacity&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('capacity', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
          Колір
          <div class="pull-right">
            <a href="?sortby=color&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('color', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=color&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('color', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
          Ціна
          <div class="pull-right">
            <a href="?sortby=price&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('price', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=price&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('price', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
          Створено
          <div class="pull-right">
            <a href="?sortby=created_at&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('created_at', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=created_at&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('created_at', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-3">
          Змінено
          <div class="pull-right">
            <a href="?sortby=updated_at&sortdir=ASC"
               class="btn btn-xs {{ is_active_sorter('updated_at', 'ASC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-up"></i>
            </a>
            <a href="?sortby=updated_at&sortdir=DESC"
               class="btn btn-xs {{ is_active_sorter('updated_at', 'DESC') ? 'btn-primary' : 'btn-default' }}">
              <i class="fa fa-arrow-down"></i>
            </a>
          </div>
        </th>
        <th class="col-xs-2">
          Дії
        </th>
      </tr>
      </thead>
      <tbody>
      @foreach($cars as $car)
        <tr>
          <td>{{ $car->id }}</td>
          <td>
            <a href="/car/{{ $car->id }}">{{ $car->model }}</a>
          </td>
          <td>{{ $car->marka }}</td>
          <td>{{ $car->year }}</td>
          <td>{{ $car->body_type }}</td>
          <td>{{ $car->capacity }}</td>
          <td>{{ $car->color }}</td>
          <td>{{ $car->price }}</td>
          <td>
            <time class="timeago" datetime="{{ $car->created_at->toIso8601String() }}"
                  title="{{ $car->created_at->toDayDateTimeString() }}">
              {{ $car->created_at->diffForHumans() }}
            </time>
          </td>
          <td>
            <time class="timeago" datetime="{{ $car->updated_at->toIso8601String() }}"
                  title="{{ $car->updated_at->toDayDateTimeString() }}">
              {{ $car->updated_at->diffForHumans() }}
            </time>
          </td>
          <td>
            <div class="input-group-btn">
              <a href="{{ route('car.edit', $car->id) }}" class="btn btn-primary">Редагувати</a>
              <a href="{{ route('car.delete', $car->id) }}" class="btn btn-danger"
                 onclick="return confirm('Are you sure to delete this car?');">
                Видалити
              </a>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>

    <div class="text-center">
      {!! $cars->appends(request()->except('car'))->links() !!}
    </div>

  </div>
@endsection
