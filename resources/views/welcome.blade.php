@extends('master')
@section('contact')
        <div class="container">
            

            <div class="row pad-top">
            
                <div class="col-sm-12 welcome align-center central-market-background height">
                  <b class="text-color-white">  Welcome to Phnom Penh</b>
                
                <div class="col-sm-12 align-center">
                    @if (Route::has('login'))
                    <div class="links">
                        @auth
                            <a href="{{ url('/home') }}"> <b> Home </b></a>
                        @else
                            <a href="{{ route('login') }}"> <b> Login </b>    &nbsp; &nbsp; &nbsp;  </a> 

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">&nbsp; &nbsp; &nbsp; <b> Register </b> </a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
                </div>
            </div>
                <hr> <hr> <hr>
            <div class="row pad-top">
                <div class="col-sm-4">
                    <h3 class="content-head"> <b> About Us </b></h3>
                    
                    <p>We are the guide who will guide you to the best restaurant you love in Phnom Penh, the capital city of cambodia... <br>
                        Producer: <b> Cheng SongSeng </b>
                    </p>
                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-6">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-8"></div>
                            <div class="form-group col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-8"></div>
                            <div class="form-group col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-8">
                                <h3 class="content-head"> <b> CONTACT </b></h3>
                                <hr />
                            </div>
                            <div class="form-group col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-8">
                                <label for="name">Name<span>*</span></label>
                                <input type="text" class="form-control" id="name" />
                            </div>
                            <div class="form-group col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-4">
                                <label for="email">Email<span>*</span></label>
                                <input type="email" class="form-control" id="email" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pm">Phone Number</label>
                                <input type="text" class="form-control" id="pm" />
                            </div>
                            <div class="form-group col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-8">
                                <label for="subject">Subject</label>
                                <input type="name" class="form-control" id="subject" />
                            </div>
                            <div class="form-group col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-8">
                                <label for="name">Message</label>
                                <textarea class="form-control" rows="8" placeholder="type here ..."></textarea>
                            </div>
                            <div class="form-group col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-8">
                                
                                    
                                    <form class="form-inline">
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-primary" type="button"><a href="{{ url('contact/submit') }}">
                                                NEXT&gt;
                                                </a>
                                            </button>
                                        </div>
                                    </form>
                                
                            </div>
                            <div class="form-group col-md-2"></div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr> <hr> <hr>
<footer>
    <div class="container welcome align-center white">
                    Thank you for visiting our page
    </div>
    <br><br>
</footer>
        @endsection