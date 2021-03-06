@extends('layouts.app')

@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phnom Penh</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            footer{
                background-color: orange;
                height: 30vh;
                font-weight: 200;
                font-size: 30px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .center {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .central-market-background{
                background-image: url("../assets/img/central market night.jpg");
            }
            .height{
                height: 400px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .welcome{  
                font-size: 70px;   
                font-family: cursive;
            }
            .white{
                color: white;
            }
            .yellow{
                color: yellow;
            }
            .orange{
                color: orange;
            }
            .pad-top{
                padding-top: 30px;
            }
            .pad-left{
                padding-left: 40px;
            }
            @media only screen and ( max-width: 480px){
                .welcome{  
                    font-size: 20px;
                }
            }
        </style>
    </head>

    <body>
    
        <div class="container ">
            <div class="row justify-content-center top-right links">
                <div class="col-md-1 ">
                    <div class="card ">
                        <div class="card-header"></div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                
                <div class="welcome center central-market-background height">
                    <b class="white"> Navigate Your Way To The Test Of Life</b>
                </div>
                <hr> <hr> <hr>

                  @foreach ($restaurants as $restaurant)
                    <div class="card-header">
                        
                        <h4 class="card-title">{{ $restaurant->restaurant_name }} 
                        <b class="float-right orange">Rating: {{ $restaurant->restaurant_rating }} </b></h4>
                        <h5 class="card-category">{{ $restaurant->restaurant_type }}</h5>
                        <p>{{ $restaurant->restaurant_location }}</p>
                        <p>{{ $restaurant->restaurant_decription }}</p>

                    </div>
                  @endforeach
                </div>
              </div>

                
            </div>
        </div>

        <br> <br>
    </body>

    <footer>
        <div class="containter pad-top pad-left">
                <a class="white " href="/"> <b > Contact Us </b> </a>
        </div>
    
    </footer>

@endsection
