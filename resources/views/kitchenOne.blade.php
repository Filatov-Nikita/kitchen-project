@extends('base')
    @section('content')
    <div class="wrapper">
        <div class="content">
            <div class="kitchenOne">
                <div class = "title">
                        {{$kitchen->name}}
                    </div>
                    <div class="img">
                        {{$kitchen->img}}
                    </div>
                    <div class = "content">
                        {{$kitchen->text}}
                    </div>
            </div>
        </div>
    </div>
    @endsection