@extends('layouts.guest_show')

@section('content')
<div id="root">
<section id="guest-show">
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
					@foreach($foods as $food)
						@if($food->available == 1)
						<div class="menu-card">
 							<div class="menu-img">
								<img src="{{asset($food->photo)}}" alt="{{$food->name}}">
							</div>
							<div class="menu-title">
								<h4>{{$food->name}}</h4>
							</div>
							<div class="menu-ingredients">
								<p>Ingredienti: {{$food->ingredients}}</p>
							</div>
							<div class="card-cmd flex">
								<p style="margin-bottom: 0">{{$food->price}} €</p>
								<p class="uppercase cart" style="margin-bottom: 0; cursor: pointer" @click="add_cart({{$food}})">Aggiungi <i class="fas fa-shopping-cart"></i></p>
							</div>
						</div>
						@else
						<div class="menu-card disabled">
							<div class="menu-img">
								<img src="{{asset($food->photo)}}" alt="{{$food->name}}">
							</div>
							<div class="menu-title">
								<h4>{{$food->name}}</h4>
							</div>
							<div class="menu-ingredients">
								<p>Ingredienti: {{$food->ingredients}}</p>
							</div>
							<div class="card-cmd flex">
								<p style="margin-bottom: 0">{{$food->price}} €</p>
							
								
							</div>
						</div>
						@endif
					@endforeach
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
						<div class="back">
							<a class="" href="{{route('index')}}">Indietro</a>
						</div>
					</div>
				</div>

				<div class="carrello" v-if="carrello">
					<div v-for="order in carrello">
					<p>@{{order.name}}</p>
					<p>@{{order.price}}</p>
					<p id="pippolino">@{{order.quantity}}</p>
					<button @click="aggiungi()">+</button>
					<button @click="meno()">-</button>
					
					</div>
					<p v-if="carrello" >  Totale: @{{carrelloTotale}} €</p>
				</div>
			</div>
		</div>
	</div>
	<div class="img-show">
		<img src="../img/restaurant.png" alt="">
	</div>	
</section>
</div>

@endsection
