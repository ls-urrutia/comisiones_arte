<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body class="bg-dark">

    <div class="container text-white">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                  <h4 class="text-white">Registro de usuario</h4><hr>
                  <form action="{{ route('user.create') }}" method="post" autocomplete="off">
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
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" placeholder="Ingrese nombre y apellido" value="{{ old('name') }}">
                          <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Ingrese su e-mail" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" value="{{ old('password') }}">
                          <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                      </div>
                      <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Confirme su contraseña" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                    </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Registrar</button>
                      </div>
                      <br>
                      <a href="{{ route('user.login') }}">Ya tengo una cuenta</a>
                  </form>
            </div>
        </div>
    </div>

</body>
</html>
