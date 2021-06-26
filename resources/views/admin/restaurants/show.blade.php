@extends('layouts.user')

@section('content')
<!-- <div class="container">
    <div class="row">
		<div class="col-md-12">
			<h3>{{$restaurant->name}}</h3>
			<p>Category:
			@foreach($restaurant->categories as $category)
				{{$category->name}}
			@endforeach
			</p>
			<img src="{{asset($restaurant->photo)}}" alt="{{$restaurant->name}}">
			<p>{{$restaurant->description}}</p>

			
			@foreach($foods as $food)
				<h4>{{$food->name}}</h4>
				<p>{{$food->description}}</p>
				<p>{{$food->price}}</p>
				{{$food->avaible}}
				<img src="{{asset($food->photo)}}" alt="{{$food->name}}">
				<a href="{{route('admin.foods.edit', ['food' => $food->id])}}">Modifica</a>
			@endforeach

			<span class="btn btn-navbar" onclick="event.preventDefault();
				document.getElementById('getRestaurant').submit();">Aggiungi piatto</span>
			<form id="getRestaurant" action="{{route('admin.getrestaurant', ['id' => $restaurant->id])}}" method="post">
				@csrf
				@method('POST')
				<input type="hidden" name="id" value="{{ $restaurant->id }}">
			</form>
		</div>  
	</div>  
</div> -->
<section id="show-rest">
	<div class="container-show">
		<div class="content flex">
			<div class="w50 l">
				<h1>{{$restaurant->name}}</h1>
				<p>Category:
				@foreach($restaurant->categories as $category)
					{{$category->name}}
				@endforeach
				</p>
				<p class="descr">{{$restaurant->description}}</p>
				<h4 class="menu">Menu:</h4>
				<div class="menu-wrapper flex">
					<div class="menu-card">
						@foreach($foods as $food)
						<h4>{{$food->name}}</h4>
<!-- 					<p>{{$food->description}}</p>-->
						<p>{{$food->price}} €</p>
						{{$food->avaible}}
	<!-- 				<img src="{{asset($food->photo)}}" alt="{{$food->name}}">-->
						<div class="card-cmd">
							<a class="btn-edit" href="{{route('admin.foods.edit', ['food' => $food->id])}}"><i class="far fa-edit"></i></a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="w50 r">
				<img src="{{asset($restaurant->photo)}}" alt="{{$restaurant->name}}">
				<div class="infos">
					<h4>Info</h4>
					<p>Indirizzo: {{$restaurant->address}}</p>
					<p>Telefono: {{$restaurant->telephone_number}}</p>
				</div>
				<div class="menu-cmd flex">
					<div class="add-food">
						<span class="btn add-menu" onclick="event.preventDefault();
						document.getElementById('getRestaurant').submit();">Aggiungi piatto</span>
						<form id="getRestaurant" action="{{route('admin.getrestaurant', ['id' => $restaurant->id])}}" method="post">
							@csrf
							@method('POST')
							<input type="hidden" name="id" value="{{ $restaurant->id }}">
						</form>
					</div>
					<div class="back">
						<a class="" href="{{route('admin.restaurants.index')}}">Indietro</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
