@extends('base')
	@section('content')
    <div class="wrapper">
        <form action = "" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="text" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div> <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection