@extends('layouts.admin')


@section('title')
    Add Restaurant
@endsection


@section('brand')
    ADD RESTAURANT
@endsection


@section('content')
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Add Restaurant</h4>
    </div>
    <div class="card-body">

    <form method="post" action="{{url('admin/addRestaurant')}}">
    {{csrf_field()}}
    
      <div class="form-group">
        <input type="text" name="restaurant_name" class="form-control" placeholder="Enter Restaurant Name" />
      </div>
      <div class="form-group">
        <input type="text" name="restaurant_type" class="form-control" placeholder="Enter Restaurant Type" />
      </div>
      <div class="form-group">
        <input type="text" name="restaurant_location" class="form-control" placeholder="Enter Restaurant Location" />
      </div>
      <div class="form-group">
        <input type="integer" name="restaurant_rating" class="form-control" placeholder="Enter Restaurant Rating" />
      </div>
      <div class="form-group">
        <input type="text" name="restaurant_decription" class="form-control" placeholder="Enter Restaurant Decription" />
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-secondary" value="ADD" />
      </div>
    </form>
    </div>
 </div>
</div>
@endsection

@section('scripts')

@endsection