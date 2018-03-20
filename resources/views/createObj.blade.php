@extends('base')
	@section('content')
    <div class="wrapper">
        <form action = "" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="nameObject">Имя объекта</label>
              <input type="text" name = "name" class="form-control" id="nameObject" aria-describedby="emailHelp" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="typeObject">Выберите тип объекта</label>
                <select name="type" id="typeObject">
                  @foreach ($types as $type)
                  <option value="{{$type->id}}">{{$type->name}}</option> 
                  @endforeach
                </select> <br>
              </div>
              <div class="form-group">
                <label for="contentObject">content</label>
                <input type="text" name = "text" class="form-control" id="contentObject" placeholder="Enter content">
              </div>
              <div class="form-group">
                  <label for="providerObject">Выберите поставщика</label>
              <select name="provider"  id="providerObject">
                @foreach ($providers as $provider)
                   <option value="{{$provider->id}}">{{$provider->name}}</option> 
                @endforeach
              </select>
            </div> <br>
            <button type="submit" class="btn btn-primary">Сохранить</button>
          </form>
    </div>
@endsection