<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('font/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" >
        <div class="container-fluid" style="padding-top: 10px !important;">
          <a class="navbar-brand" href="#">Titulo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cursos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Forum
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Comuinidades
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <div class="d-flex" id="log">
                <a href="">Registar</a> <span>|</span> <a href="">Login</a></li>
              </div>
          </div>
        </div>
      </nav>

      <div class="container text-center" id="center">
        <h2>Começa a sua carreira com Titulo</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Labore minima pariatur maxime eum inventore porro expedita delectus ut eligendi
        </p>
        <div class="row" >
            <div class="col-md-10" id="input">
                <input type="text" class="form-control " placeholder="que curso gostarias de fazer?">
            </div>
            <button class="btn btn-primary col-md-2" id="btn"><i class="fas fa-search"></i></button>
        </div>
        <div class="row">
            <div class="col-md-4 below col-sm-12 col-xs-12 col-xl-4">
                <a href="">
                    <i class="fa fa-"></i>Mais X estudantes inscritos
                </a>
            </div>
            <div class="col-md-4 below col-sm-12 col-xs-12 col-xl-4">
                <a href="">
                    <i class="fa fa-"></i>Mais de X Cursos
                </a>
            </div>
            <div class="col-md-4 below col-sm-12 col-xs-12 col-xl-4">
                <a href="">
                    <i class="fa fa-"></i>Aprenda em online
                </a>
            </div>
        </div> 
   </div>   


      <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>
</body>
</html>