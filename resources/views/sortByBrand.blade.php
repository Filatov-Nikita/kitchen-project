@extends('base')
    @section('content')
    <section>
            <div class="wrapper">
                <div class="list__providers">
                        <ul>
                            @foreach($providers as $provider)
                                <li>
                                    <a href="{{route('sortBrand', ['provider_id' => $provider->id])}}">{{$provider->brand}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                <div class="items">
                @foreach($sortKitchens as $sortKitchen)
                <div class="item">
                    <div class="my-content">
                    <div class="img">
                        <img src="{{url('images/img__kitchen/17.jpg')}}" alt="">
                    </div>
                    <div class="name">
                        {{$sortKitchen->name}}
                    </div>
                    <div class="button">
                        <a href="{{route('kitchenById', ['id' => $sortKitchen->id])}}">подробнее</a> 
                    </div> 
                    </div>
                </div>
                @endforeach
                </div>
            </div>
            </section>
    @endsection