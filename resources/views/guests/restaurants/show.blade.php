@extends('layouts.guest_show')

@section('content')

<script src="https://js.braintreegateway.com/web/dropin/1.30.1/js/dropin.js"></script>

<div id="root">
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
				<p>Category:
				@foreach($restaurant->categories as $category)
					{{$category->name}}
				@endforeach
				</p>
				<p class="descr">{{$restaurant->description}}</p>
				<span>Indirizzo: {{$restaurant->address}} •</span>
				<span>Telefono: {{$restaurant->telephone_number}}</span>
			</div>
			<h1 class="menu">Menu:</h1>
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
								<p style="margin-bottom: 0; font-size: 20px; font-weight: 700">{{$food->price}} €</p>
								<p class="uppercase carrellino btn" style="margin-right: 20px; margin-bottom: 0; cursor: pointer" @click="addCart({{$food}},1)">Aggiungi <i class="fas fa-shopping-cart"></i></p>
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
								<p style="margin-bottom: 0; font-size: 20px">{{$food->price}} €</p>
								<p class="uppercase carrellino btn" style="margin-right: 20px; margin-bottom: 0;" @click="addCart({{$food}},1)">Non Disponibile <i class="fas fa-shopping-cart"></i></p>
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
	</section>
</div>

@endsection
