@extends('layouts.app')

@section('content')

  <div class="container">

    <h2>{{ $car->model }}, {{$car->marka}}</h2>
    <div>
        Дата випуску: {{ $car->year }}
    </div>
    <div>
        Тип кузова: {{ $car->body_type }}
    </div>
    <div>
        Потужність двигуна: {{ $car->capacity }}
    </div>
    <div>
        Колір: {{ $car->color }}
    </div>
    <div>
        Ціна: {{ $car->price }}
    </div>
    <div>
      Останні зміни:
      <time class="timeago" datetime="{{ $car->updated_at->toIso8601String() }}"
            title="{{ $car->updated_at->toDayDateTimeString() }}">
        {{ $car->updated_at->diffForHumans() }}
      </time>
    </div>
  </div>

@endsection
