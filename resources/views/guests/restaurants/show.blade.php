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

<!-- 	<div class="checkout" v-if="!scompari">
	<section id="add-food " class="flex">
	<div class="container food-card">
		<div class="row">
			<div class="col-md-12 text-center uppercase">
				<h3>Conferma Ordine</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<form id="payment-form" action="{{route('orders.store')}}" method="post"  enctype="multipart/form-data">
					@csrf
					@method('POST')
					<input type="hidden" name="restaurant_id" value="{{ $restaurant['id'] }}">

						<div class="form-group">
							<label for="customer_name">Nome</label>
							<input v-model="customer_name" class="form-control @error('customer_name') is-invalid @enderror" id="customer_name" type="text" name="customer_name" value="{{ old('customer_name') }}">
							@error('customer_name')
								<small class="text-danger">{{ $message }}</small>
							@enderror
						</div>

						<div class="form-group">
							<label for="customer_surname">Cognome</label>
							<input  v-model="customer_surname" class="form-control @error('customer_surname') is-invalid @enderror" id="customer_surname" type="text" name="customer_surname" value="{{ old('customer_surname') }}">
							@error('customer_surname')
								<small class="text-danger">{{ $message }}</small>
							@enderror
						</div>

						<div class="form-group">
							<label for="customer_address">Indirizzo</label>
							<input v-model="customer_address" class="form-control @error('customer_address') is-invalid @enderror" id="customer_address" type="text" name="customer_address" value="{{ old('customer_address') }}">
							@error('customer_address')
								<small class="text-danger">{{ $message }}</small>
							@enderror
						</div>

						<div class="form-group">
	                    	<label for="customer_phone_number">Numero di Telefono</label>
	                    	<input v-model="customer_phone_number"  class="form-control @error('customer_phone_number') is-invalid @enderror" id="customer_phone_number" type="text" name="customer_phone_number" value="{{ old('customer_phone_number') }}">
	                   		@error('customer_phone_number')
	                   			<small class="text-danger">{{ $message }}</small>
	                    	@enderror
	                	</div>

						<div class="form-group row">
                            <label for="customer_email">E-mail</label>
                            <input v-model="customer_email" class="form-control @error('customer_email') is-invalid @enderror" id="customer_email" type="email"  name="customer_email" value="{{ old('customer_email') }}" required autocomplete="customer_email">
                            @error('customer_email')
								<small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>



						<div class="form-group">
							<label for="total">Totale</label>
							<input v-model="total"  id="total" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ old('total') }}" required autocomplete="total" readonly>

							@error('total')
								<small class="text-danger">{{ $message }}</small>
							@enderror							
						</div>

						<div id="dropin-container"></div>

						
						<div id="payment-form"></div>
						<button id="submit-button" class="button button--small button--green btn btn-dark">Procedi con l'ordine</button>
						

					

					<a class="btn back" href="{{route('index')}}">Annulla</a>
				</form>
			</div>
		</div>
	</div>
	</div>
</section>

</div>
		
<script> 
braintree.dropin.create({
  selector: '#dropin-container'
}, function (err, instance) {
  button.addEventListener('click', function () {
    instance.requestPaymentMethod(function (err, payload) {
    });
  })
});
</script> -->
@endsection
