<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title >Inicio sesión Artista</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4 class="text-white">Inicio Sesión Artista</h4><hr>
                 <form action="{{ route('artista.check') }}" method="post">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                     <div class="form-group  text-white">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" name="email" placeholder="Ingrese su e-mail" value="{{ old('email') }}">
                         <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                     </div>
                     <div class="form-group  text-white">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" value="{{ old('password') }}">
                         <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                     </div>
                     <div class="form-group  text-white">
                         <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                     </div>
                     <br>
                     <a href="{{ route('artista.register') }}">Crear Nueva Cuenta</a>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>
