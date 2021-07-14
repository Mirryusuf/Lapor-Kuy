<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pengaduan Aspirasi Masyarakat</title>
  </head>
  <body>
    @include('sweetalert::alert')
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 form-panel">
                <div class="container"style="background-color: white; margin-top: 130px; margin-bottom: 5px;">
                    <div class="card">
                      <div class="card-header" style="font-weight: bold; font-size: 20px;">
                        <h3 style="text-align: center;">Login</h3>  
                      </div>
                        <div class="card-body">
                           <form action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label for="exampleInputEmail1">Username</label>
                              <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukan Username">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
                            </div>
                            <center><button type="submit" class="btn btn-primary">Login</button></center>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>