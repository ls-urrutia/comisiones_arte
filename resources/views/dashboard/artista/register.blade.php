<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Artista</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4 class="text-white">Registro de Artista</h4><hr>
                 <form action="{{ route('artista.create') }}" method="post">
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                     <div class="form-group text-white">
                         <label for="name">Nombre</label>
                         <input type="text" class="form-control" name="name" placeholder="Ingrese nombre y apellido" value="{{ old('name') }}">
                         <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group text-white">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Ingrese Email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group text-white">
                        <label for="seudonimo">Seudónimo (O como te gustaría ser presentado)</label>
                        <input type="text" class="form-control" name="seudonimo" placeholder="Ingrese seudónimo" value="{{ old('seudonimo') }}">
                        <span class="text-danger">@error('seudonimo'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group text-white">
                         <label for="password">Contraseña</label>
                         <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group text-white">
                        <label for="cpassword">Confirmación Contraseña</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Confirme su contraseña" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Register</button>
                     </div>
                     <br>
                     <a href="{{ route('artista.login') }}">Ya tengo una cuenta, iniciar sesión ahora</a>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>
