<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>@yield('title')</title>
</head>
<style>
    footer{
        background-color: orange;
    }
    a{
        color: lightgrey;
    }
    a:hover{
        text-decoration: none;
        color:white;
    }
    .content-head{
        font-size: 30px;
    }
    .central-market-background{
        background-image: url("../assets/img/central market night.jpg");
        height: 100%;
    }
    .height{
        height: 400px;
    }
    span{
        color: red;
    }
    #right{
        float: right;
    }
    .welcome{  
        color: grey;
        font-size: 70px;
    }
    .align-center{
        text-align: center;
    }
    .flex-right{
        display: flex;
        flex: right;
    }
    .float-right{
        float: right;
    }
    .links{
        font-size: 25px;
    }
    .pad-top{
        padding-top: 100px;
    }
    .pad-buttom{
        padding-bottom: 100px;
    }
    .text-color-white{
        color: white;
    }
    .white{
        color: white;
    }
    @media only screen and ( max-width: 480px){
        .content-head{
            font-size: 15px;
        }
        .links{
            font-size: 10px;
        }
        .welcome{  
            font-size: 20px;
        }
    }
</style>
<body>
<div class="container">
    @yield('contact')
</div>
</body>
</html>


