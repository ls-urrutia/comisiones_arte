<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard | Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body class="bg-dark">

    <div class="container ">
        <div class="row ">
            <div class="col-md-6 offset-md-3 " style="margin-top: 45px">
                 <h4 class="text-white">User Dashboard</h4><hr>
                 <table class="table table-striped table-inverse table-responsive ">
                     <thead class="thead-inverse text-white"">
                         <tr>
                             <th>Nombre</th>
                             <th>Email</th>
                             <th>Acción</th>
                         </tr>
                         </thead >
                         <tbody" >
                             <tr class="bg-dark text-white"">
                                 <td >{{ Auth::guard('web')->user()->name }}</td>
                                 <td>{{ Auth::guard('web')->user()->email }}</td>
                                 <td>
                                     <a  href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Deslogearse</a>
                                     <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                                 </td>
                             </tr>
                         </tbody>
                 </table>
            </div>
        </div>
    </div>

</body>
</html>
