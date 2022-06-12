<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
        <link rel="stylesheet" href="css/styles.css">

    <title>Compra y Vende Arte</title>



</head>


<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="navbar-id">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="bi bi-brush-fill text-white"></i>
            <span class="align-middle">Asistente de comisiones</span>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">

                        <li class ="nav-item">
                            <a href="{{route('artista.home')}}" class="nav-link {{request()->routeIs('artista.home') ? 'active' : ''}}">Dashboard</a>
                        </li>

                      <li class ="nav-item">
                            <a href="{{route('artista.calendario')}}" class="nav-link {{request()->routeIs('artista.calendario') ? 'active' : ''}}">Asistente Comisiones</a>
                        </li>


                    </ul>
            <form class="d-flex ps-5">
                <input class="form-control me-2" type="search" placeholder="busqueda" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
<!-- navbar -->

<body class="bg-dark">

    <!-- tabla calendario -->
    <div class="container bg-dark">

        <h1>sda</h1>
        <h1 class="my-5 text-white">Calendario de comisiones</h1>
    
          <table class="table table-striped my-5 bg-white">
          <thead>
            <tr>
              <th scope="col">Comision N°</th>
              <th scope="col">Fecha Inicio</th>
              <th scope="col">Estado</th>
              <th scope="col">Fecha límite</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>21 Marzo, 2021</td>
              <td>En Proceso</td>
              <td>30 Marzo, 2021</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>22 Marzo, 2021</td>
              <td>Por Pagar</td>
              <td>Esperando Confirmación</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>23 Marzo, 2021</td>
                <td>Lista. A espera de envio</td>
                <td>26 Marzo, 2021</td>
            </tr>
            <tr class="table-success">
                <th scope="row">4</th>
                <td>24 Marzo, 2021</td>
                <td>Enviada</td>
                <td>25 Marzo, 2021</td>
            </tr>
          </tbody>
        </table>
    </div>
    <!-- tabla -->

<div class="container text-white bg-light ">
    <h3 class="text-dark">Detalles comision N°4</h3>
    <div class="container bg-dark text-center text-white">
        <h4>Comision para cliente #Nombre</h4>
        <hr>
        <span>Categoria:</span>
        <div>
            <span class="text-secondary">Lorem, ipsum.</span>
        </div>
        <span>Detalles:</span>
        <div>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cumque repellendus, reiciendis deserunt ratione obcaecati labore porro doloremque commodi, veritatis esse doloribus aliquid rerum!</p>
        </div>
        <div>
            <span>Observaciones del cliente:</span>
        <div>
            <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cumque repellendus, reiciendis deserunt ratione obcaecati labore porro doloremque commodi, veritatis esse doloribus aliquid rerum!</p>
        </div>
        </div>
        <span>Precio acordado:</span>
        <div>
            <span class="text-secondary">$$$$</span>
        </div>
        <hr>
     


    </div>

</div>


<div class="espacio bg-dark">

</div>

   
    <!-- Footer -->
    <footer class="container-fluid bg-dark py-5 text-center text-light ">
    
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vero necessitatibus unde aspernatur. Facilis, ab alias? Nesciunt, ducimus a deserunt iure laudantium voluptatum perferendis ipsam libero, ipsum illo laboriosam? Quaerat, autem?</p>
        <hr>
        @2021 - All Right Reserved. Designed and Developed by ls-urrutia
        </footer>
    <!-- Footer -->

</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <script src="app.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



</html>