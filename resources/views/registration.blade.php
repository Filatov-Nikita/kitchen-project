@extends('base')
    @section('content')
    <div class="wrapper">
        <form action = "" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="userName">Ваше имя</label>
              <input type="text" name = "name" class="form-control" id="userName" aria-describedby="emailHelp" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="userEmail">Ваш email</label>
              <input type="text" name = "email" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
              <div class="form-group">
                <label for="userPassword">Пароль</label>
                <input type="password" name = "password" class="form-control" id="userPassword" placeholder="Password">
              </div> <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    @endsection