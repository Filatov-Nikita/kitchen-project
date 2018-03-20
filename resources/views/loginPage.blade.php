@extends('base')
	@section('content')
    <div class="wrapper">
        <form action = "" method="POST">
            {{csrf_field()}}
            <div class="form-group">
              <label for="emailUser">Ваш email</label>
              <input type="text" name = "email" class="form-control" id="emailUser" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="userPassword">Password</label>
              <input type="password" name = "password" class="form-control" id="userPassword" placeholder="Password">
            </div> <br>
            <button type="submit" class="btn btn-primary">Войти</button>
          </form>
    </div>
@endsection