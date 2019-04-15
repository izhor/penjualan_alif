<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white" style="display:flex">

                  <div class="navbar-brand text-light" style="display:flex">

                    <div>
                        <i class="fas fa-user-circle fa-3x"></i>
                    </div>
                    <div style="margin-left:5%;">
                     {{ Auth::user()->name }} <br>
                    <div class="text" style="font-size:12px;">
                            <i class="fas fa-circle text-success"></i> Online
                    </div>
                    </div>

                    </div>

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#demo-navbar" aria-controls="demo-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>



                  <div class="collapse navbar-collapse" id="demo-navbar">

                    <ul class="navbar-nav mr-auto">

                     
                      <li class="nav-item">
                        <a class="nav-link text-light" href="/displayBrg"> <i class="fas fa-home"></i> Home</a>
                      </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="frontpage_user.php?u=contact"> <i class="fas fa-shopping-cart"></i> Barang</a>
                      </li>









                    </ul>

                    <div class="form-inline my-2 my-lg-0">
                   
                               <a class="btn btn-danger text-light" style="width:fit-content; padding:5px;" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                         <i class="fas fa-power-off"></i> Keluar
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>

                    </div>

                  </div>


                </nav>
<div class="container-fluid">
@yield('user')
</div>

</body>
</html>
