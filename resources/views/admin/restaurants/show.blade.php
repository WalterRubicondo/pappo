@extends('layouts.user')

@section('content')

<div id="show-rest">
	<section id="guest-show">
		<div class="banner">
			<img src="{{asset($restaurant->photo)}}" alt="{{$restaurant->name}}">
			<div class="banner-layer">
				<div class="container-banner">
					<div class="rest-title">
						<h1>{{$restaurant->name}}</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-show">
			<div class="rest-contacts">
				<p> pizza - hamburger - fritti - insalate
				@foreach($restaurant->categories as $category)
					{{$category->name}}
				@endforeach
				</p>
				<div class="span-cont">
					<span class="first"><i class="fas fa-map-marker-alt"></i> {{$restaurant->address}} • </span>
					<span><i class="fas fa-phone-alt"></i> {{$restaurant->telephone_number}} </span>
				</div>
			</div>
			<h1 class="menu">MENU:</h1>
			<div class="menu-wrapper flex">
				@foreach($foods as $food)
					@if($food->available == 1)
					<div class="menu-card flex">
						<div class="menu-card-l">
							<div class="menu-title">
								<h4>{{$food->name}}</h4>
							</div>
							<div class="menu-ingredients">
								<p>Ingredienti: {{$food->ingredients}}</p>
							</div>
							<div class="card-cmd flex">
								<div class="left">
									<p>Prezzo: {{$food->price}} € </p>
								</div>
								<div class="right flex">
									<a  href="{{route('admin.foods.edit', ['food' => $food->id])}}" class="btn-edit"><i class="far fa-edit"></i></a>
									<form action="{{route('admin.foods.destroy', ['food' => $food->id])}}" method="post">
										@csrf
										@method('DELETE')
										<input class="btn-delete fa" type="submit" name="" value="&#xf1f8;">
									</form>
								</div>
							</div>
						</div>
						<div class="menu-card-r">
							<img src="{{asset($food->photo)}}" alt="{{$food->name}}">
						</div>
					</div>
					@else
					<div class="menu-card flex disabled">
						<div class="menu-card-l">
							<div class="menu-title">
								<h4>{{$food->name}}</h4>
							</div>
							<div class="menu-ingredients">
								<p>Ingredienti: {{$food->ingredients}}</p>
							</div>
							<div class="card-cmd flex">
								<div class="left">
									<p>Prezzo: {{$food->price}} €</p>
								</div>
								<div class="right flex">
									<a  href="{{route('admin.foods.edit', ['food' => $food->id])}}" class="btn btn-edit"><i class="far fa-edit"></i></a>
									<form action="{{route('admin.foods.destroy', ['food' => $food->id])}}" method="post">
										@csrf
										@method('DELETE')
										<input class="btn-delete fa" type="submit" name="" value="&#xf1f8;">
									</form>
								</div>
							</div>
						</div>
						<div class="menu-card-r">
							<img src="{{asset($food->photo)}}" alt="{{$food->name}}">
						</div>
					</div>
					@endif
				@endforeach
			</div>
		</div>
		<div class="menu-cmd flex">
			<div class="add-food">
				<span class="btn btn add-food" onclick="event.preventDefault();
				document.getElementById('getRestaurant').submit();">Aggiungi piatto</span>
				<form id="getRestaurant" action="{{route('admin.getrestaurant', ['id' => $restaurant->id])}}" method="post">
					@csrf
					@method('POST')
					<input type="hidden" name="id" value="{{ $restaurant->id }}">
				</form>
			</div>
			<div class="btn back">
				<a class="back" href="{{route('admin.restaurants.index')}}">Indietro</a>
			</div>
		</div>
	</section>
</div>

@endsection
