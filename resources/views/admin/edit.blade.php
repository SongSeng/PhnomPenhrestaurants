@extends('layouts.admin')


@section('title')
    Edit Restaurant Table
@endsection


@section('brand')
    Edit RESTURANT LIST
@endsection



@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  
  <form method="post" action="{{action('Admin\RestaurantController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   
   <div class="form-group">
    <input type="text" name="restaurant_name" class="form-control" value="{{$restaurant->restaurant_name}}" placeholder="Enter Restaurant Name" />
   </div>
   <div class="form-group">
    <input type="text" name="restaurant_type" class="form-control" value="{{$restaurant->restaurant_type}}" placeholder="Enter Restaurant Type" />
   </div>
   <div class="form-group">
    <input type="text" name="restaurant_location" class="form-control" value="{{$restaurant->restaurant_location}}" placeholder="Enter Restaurant Location" />
   </div>
   <div class="form-group">
    <input type="text" name="restaurant_decription" class="form-control" value="{{$restaurant->restaurant_decription}}" placeholder="Enter Restaurant Decription" />
   </div>
   <div class="form-group">
    <input type="text" name="restaurant_rating" class="form-control" value="{{$restaurant->restaurant_rating}}" placeholder="Enter Restaurant Rating" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection


@section('scripts')

@endsection