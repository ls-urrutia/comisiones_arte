
@extends('layouts.app')


@section('content')



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artist Dashboard | Home</title>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                 <h4 class= "text-white" >Artist Dashboard</h4><hr>
                 <table class="table table-striped table-inverse table-responsive">
                     <thead class="thead-inverse text-white">
                         <tr>
                             <th>Nombre</th>
                             <th>Email</th>
                             <th>Seudonimo</th>
                             <th>Acción</th>
                         </tr>
                         </thead>
                         <tbody class="text-white">
                             <tr>
                                 <td scope="row">{{ Auth::guard('artista')->user()->name }}</td>
                                 <td>{{ Auth::guard('artista')->user()->email }}</td>
                                 <td>{{ Auth::guard('artista')->user()->seudonimo }}</td>
                                 <td>
                                     <a href="{{ route('artista.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Deslogearse</a>
                                     <form action="{{ route('artista.logout') }}" id="logout-form" method="post">@csrf</form>
                                 </td>
                             </tr>
                         </tbody>
                 </table>
            </div>
        </div>
    </div>

</body>

@endsection

