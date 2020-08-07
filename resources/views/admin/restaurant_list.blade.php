@extends('layouts.admin')


@section('title')
    Restaurant Table
@endsection


@section('brand')
    RESTURANT LIST
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Restaurant Lists</h4>
                
               <form method="post" action="">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Location</th>
                      <th>Decription</th>
                      <th>Rating</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                    @foreach ($restaurants as $restaurant)
                        <tr>
                        <td>{{ $restaurant->id }}</td>
                        <td>{{ $restaurant->restaurant_name }}</td>
                        <td>{{ $restaurant->restaurant_type }}</td>
                        <td>{{ $restaurant->restaurant_location }}</td>
                        <td>{{ $restaurant->restaurant_decription }}</td>
                        <td>{{ $restaurant->restaurant_rating }}</td>
                        <td><a href="{{action('Admin\RestaurantController@edit', $restaurant->id)}}" class="btn btn-warning">Edit</a></td>
                        <td>
                        <form method="post" class="delete_form" action="{{action('Admin\RestaurantController@destroy', $restaurant->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
</div>

@endsection
          


@section('scripts')

@endsection