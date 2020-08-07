@extends('layouts.app')

@section('content')
@guest
    <h3>Please login !!!</h3>
@else
                            
<div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                    <img src="../assets/img/bg5.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                    
                        <img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
                        <h5 class="title">{{ Auth::user()->name }}</h5>
                    
                        <p class="description">
                        {{ Auth::user()->email }}
                        </p>
                    
                        <a class="btn btn-danger align-items-center" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>
                </div>
              </div>
            <div class="col-md-4"></div>
          </div>
        </div>
    </div>
@endguest
@endsection