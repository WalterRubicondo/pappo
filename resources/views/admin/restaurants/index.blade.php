@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <a href="{{route('admin.restaurants.create')}}">New Restaurants</a>
      </div>
    </div>
    <div class="row justify-content-center">
      @foreach ($restaurants as $restaurant)
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"><a href="{{route('admin.restaurants.show', ['restaurant' => $restaurant->slug])}}">{{$restaurant->name}}</a></div>

                <div class="card-body">
                  {{$restaurant->desciption}}

                  <div class="">
                    <a href="{{route('admin.restaurants.edit', ['restaurant' => $restaurant->id])}}">Edit</a>
                    <form action="{{route('admin.restaurants.destroy', ['restaurant' => $restaurant->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="" value="Delete">
                    </form>
                  </div>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>

@endsection