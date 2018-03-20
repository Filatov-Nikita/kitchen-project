@extends('base')
    @section('content')
    <div class="wrapper">
        <div class="content">
            <div class="kitchenOne">
                <div class = "title">
                        {{$kitchen->name}}
                    </div>
                    <div class="BigImg">
                    {{--  {{$kitchen->img}}   --}}
                    <img src="{{url('images/img__kitchen/17.jpg')}}" alt="">
                    </div>
                    <div class = "content">
                        {{$kitchen->text}}
                    </div>
            </div>
        </div>
    </div>
    @endsection