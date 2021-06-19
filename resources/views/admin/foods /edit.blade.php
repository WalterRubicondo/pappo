@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Modify Restaurant</h3>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
          <form action="{{route('admin.foods.update', ['food' => $food->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name', $restaurant->name) }}">
              @error('name')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="desciption">Desciption</label>
              <textarea class="form-control @error('desciption') is-invalid @enderror" id="desciption" name="desciption"> {{ old('desciption', $restaurant->desciption) }}</textarea>
              @error('desciption')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="price">Price</label>
              <input class="form-control @error('price') is-invalid @enderror" id="price" type="text" name="price" value="{{ old('price', $food->price) }}">
              @error('price')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="avaible">Avaible</label>
              <select class="form-control @error('avaible') is-invalid @enderror" id="avaible" name="avaible" multiple>
                <option value="true">true</option>
                <option value="false">false</option>
              </select>
              @error('avaible')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div>
              <img src="{{asset($food->photo)}}" alt="">
            </div>
            <div class="form-group">
              <label for="photo">Photo</label>
              <input class="form-control-file @error('photo') is-invalid @enderror" id="photo" type='file' name="photo">
              @error('photo')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            

            <button class="btn btn-primary" type="submit">Save</button>
          </form>
      </div>
    </div>
</div>
@endsection