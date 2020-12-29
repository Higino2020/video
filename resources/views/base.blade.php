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
   <header>
       <div class="container-fluid" style="padding-top: 20px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="row" >
                <div class="col-md-2 col-lg-2 col-sm-12 col-xl-2 col-xs-12 " id="titulo">
                    <h3>Titulo do Curso</h3>
                </div>
                
                <div class="col-md-8 col-lg-8 col-sm-12 col-xl-8 col-xs-12" id="menu" >
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Cursos</a></li>
                        <li><a href="">Forum</a></li>
                        <li><a href="">Comuinidades</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-12 col-xl-2 col-xs-12 " id="log">
                    <ul>
                        <li><a href="">Registar</a> | <a href="">Login</a></li>
                    </ul>
                </div>
            </div>
       </div>
   </header>

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
   </div>   

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>
</body>
</html>