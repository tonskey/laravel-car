{!! csrf_field() !!}

<div class="form-group {{ $errors->has('model') ? 'has-error' : '' }}">

  <label for="model" class="control-label">
  Модель
  </label>

  <input type="text"
         name="model"
         id="model"
         value="{{ old('model', @$car->model) }}"
         placeholder="Модель"
         required
         class="form-control">

  @if ($errors->has('model'))
    <div class="help-block">
      {{ $errors->first('model') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('marka') ? 'has-error' : '' }}">

  <label for="marka" class="control-label">
  Марка
  </label>

  <input type="text"
         name="marka"
         id="marka"
         value="{{ old('marka', @$car->marka) }}"
         placeholder="Марка"
         required
         class="form-control">

  @if ($errors->has('marka'))
    <div class="help-block">
      {{ $errors->first('marka') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">

  <label for="year" class="control-label">
  Рік випуску
  </label>

  <input type="text"
         name="year"
         id="year"
         value="{{ old('year', @$car->year) }}"
         placeholder="Рік випуску"
         required
         class="form-control">

  @if ($errors->has('year'))
    <div class="help-block">
      {{ $errors->first('year') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('body_type') ? 'has-error' : '' }}">

  <label for="body_type" class="control-label">
  Тип кузова
  </label>

  <input type="text"
         name="body_type"
         id="body_type"
         value="{{ old('body_type', @$car->body_type) }}"
         placeholder="Тип кузова"
         required
         class="form-control">

  @if ($errors->has('body_type'))
    <div class="help-block">
      {{ $errors->first('body_type') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('capacity') ? 'has-error' : '' }}">

  <label for="capacity" class="control-label">
  Потужність двигуна
  </label>

  <input type="text"
         name="capacity"
         id="capacity"
         value="{{ old('capacity', @$car->capacity) }}"
         placeholder="Потужність двигуна"
         required
         class="form-control">

  @if ($errors->has('capacity'))
    <div class="help-block">
      {{ $errors->first('capacity') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('color') ? 'has-error' : '' }}">

  <label for="color" class="control-label">
  Колір
  </label>

  <input type="text"
         name="color"
         id="color"
         value="{{ old('color', @$car->color) }}"
         placeholder="Колір"
         required
         class="form-control">

  @if ($errors->has('color'))
    <div class="help-block">
      {{ $errors->first('color') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">

  <label for="price" class="control-label">
  Ціна
  </label>

  <input type="text"
         name="price"
         id="price"
         value="{{ old('price', @$car->price) }}"
         placeholder="Ціна"
         required
         class="form-control">

  @if ($errors->has('price'))
    <div class="help-block">
      {{ $errors->first('price') }}
    </div>
  @endif
</div>

<div class="form-group">
  <button type="submit" class="btn btn-success">Зберегти</button>
  <a href="/car" class="btn btn-default">Назад до списку</a>
</div>

