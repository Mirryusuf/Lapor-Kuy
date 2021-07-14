<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <title>@yield('title')</title>
     <style type="text/css">

      .jumbotron{
        background-image: url(img/1.jpg);
        background-size: cover;
        height: 540px;
        color: white;
      }
      
      .jumbotron .display-4{
        text-align: center;
        margin-top: 100px;
        font-weight: bold;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
        font-size: 25px;
      }

      .jumbotron .lead{
        text-align: center;
        font-weight: 200px;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
        font-size: 15px;
      }

      .jumbotron hr{
        border-color: white;
        width: 100px;
        border-width: 5px;
      }

      .proses{
        padding: 30px;
        margin-top: 30px;
      }

      .proses i{
        margin-right: 20px;
      }

      .form-panel{
        box-shadow: 0 3px 20px rgba(0,0,0,0.5);
        border-radius: 12px;
        margin-top: -150px;
        background-color: white;
      }
      @media (min-width: 992px){
        .navbar a{
          color: black;
        }

        .jumbotron{
          margin-top: -75px;
          height: 535px;
        }
        
        .jumbotron .display-4{
        text-align: center;
        margin-top: 150px;
        font-weight: bold;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
        font-size: 45px;
        }
        .jumbotron .lead{
        text-align: center;
        font-weight: 200px;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.7);
        font-size: 35px;
        }
        .jumbotron hr{
        border-color: white;
        width: 300px;
        border-width: 5px;
      }
        .proses{
        padding: 80px;
        margin-top: 30px;
      }
      }
    </style>
  </head>

  <body>
    <!-- ini navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="font-weight: bold; color: white; font-size: 25px;"><i class="far fa-comments mr-2"></i>LAPOR KUY!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-3"  style="font-weight: bold; color: white; font-size: 20px;" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link"  style="font-weight: bold; color: white; font-size: 20px;" href="{{ url('/pencarian-data') }}">Pencarian</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    @yield('content')
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>