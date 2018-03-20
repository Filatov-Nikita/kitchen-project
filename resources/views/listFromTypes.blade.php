@extends('base')
	@section('content')
	<section>
		<div class="wrapper">
			<div class="list__providers">
				<ul>
					@foreach($providers as $provider)
						<li>
							<a href="{{route('sortBrand', ['id_provider' => $provider->id])}}">{{$provider->brand}}</a>
						</li>
					@endforeach
				</ul>
			</div>  
		    <div class="items">
			@foreach($kitchens as $kitchen)
			<div class="item">
			    <div class="my-content">
				<div class="img">
				    <img src="{{url('images/img__kitchen/17.jpg')}}" alt="">
				</div>
				<div class="name">
					{{$kitchen->name}}
				</div>
				<div class="button">
				    <a href="{{route('kitchenById', ['id' => $kitchen->id])}}">подробнее</a> 
				</div> 
			    </div>
			</div>
			@endforeach
		    </div>
		</div>
	    </section>
	@endsection