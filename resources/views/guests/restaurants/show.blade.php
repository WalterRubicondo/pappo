@extends('layouts.app')

@section('content')
<div id="vue">
<div class="container">
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
				<button @click="aggiungereCarrello($food->id)">compra</button>
			@endforeach

		</div>  
	</div>  
</div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" charset="utf-8"></script>
    <!-- script di vue -->
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="{{asset('js/cart.js')}}"></script>

@endsection
