@extends('base')
	@section('content')
    <div class="wrapper">
        <form action = "" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">name</label>
              <input type="text" name = "name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">type</label>
                <select name="type"> <!--Supplement an id here instead of using 'name'-->
                  @foreach ($types as $type)
                  <option value="{{$type->id}}">{{$type->name}}</option> 
                  @endforeach
                </select> <br>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">content</label>
                <input type="text" name = "text" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <select name="provider"> <!--Supplement an id here instead of using 'name'-->
                @foreach ($providers as $provider)
              <option value="{{$provider->id}}">{{$provider->name}}</option> 
                @endforeach
              </select> <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection