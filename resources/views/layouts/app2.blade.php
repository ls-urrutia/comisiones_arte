<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Compra y Vende Arte</title>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Compra y Vende Arte</title>
</head>

<body
style="position: relative;"
data-bs-spy="scroll" 
data-bs-target="#navbar-id" 
data-bs-offset="10" 
class="scrollspy-example" 
tabindex="0"
>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" 
    id="navbar-id">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-brush-fill text-white"></i>
                <span class="align-middle">#Proyecto Alder</span>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#quienes-somos">¿ Quiénes somos ?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#artistas">Artistas</a>
                    </li>    
                        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           Cuenta Cliente
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="user/register">Crear Cliente</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="user/login">Iniciar Sesión</a></li>
                         
                        </ul>
                    </li>    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           Cuenta Artista
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="artista/register">Crear Cuenta</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="artista/login">Iniciar Sesión</a></li>
                         
                        </ul>
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

    <!-- Slider -->
    <section id="inicio">
        <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://optimistic-golick-1ff879.netlify.app/img/slide1wlop.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block ">
                        <h4>WLOP</h4>
                        <p>Gran habilidad con el estilo de pintura digital</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://optimistic-golick-1ff879.netlify.app/img/slide2chinfong1920x1080.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Chin Fong</h4>
                        <p>Comisiones abiertas de entornos urbanos</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://optimistic-golick-1ff879.netlify.app/img/slide3yunling.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Yun Ling</h4>
                        <p>Recibiendo comisiones de personajes originales</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <!-- Slider -->

    <!-- Quienes somos -->
    <main class="bg-dark text-white py-5" id="quienes-somos">
        <div class="container">
            <div class="text-center py-5 h1">
                <i class="bi bi-heart text-secondary"></i>
                <i class="bi bi-house-fill"></i>
                <i class="bi bi-heart text-secondary"></i>


            </div>
            <h2 class="text-center display-4 mb-5">¿Quiénes somos?</h2>

            <div class="row align-items-center">
                <div class="col-12 col-lg-12 text-center">
                    <h4>¿De que trata el asistente de comisiones, Alder?</h4>
                    <hr>
                    <p >Alder actua como un asistente de servicios de compra y venta de ilustraciones. Nuestro enfoque esta
                        centrado en la satisfacción del artista a para con sus clientes. Lo anterior se cumple asistiendolo
                        con un sistema de transacción y de negociación eficiente, además de la exposición de su trabajo en la plataforma.
                    </p>
                </div>
            </div>

            <h1 class="py-5 display-6">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut tenetur voluptatem
                a atque ut qui animi? Explicabo animi nesciunt in? At, inventore. Magnam at, quam ad asperiores labore
                facilis voluptatem?"</h1>

        </div>
    </main>
    <!-- Quienes somos -->

<!-- Artistas -->
    <section id="artistas" class="py-6 bg-secondary text-light">

        <div class="container">
            <div class="text-center py-5 text-primary h1">
                <i class="bi bi-file-person-fill text-dark"></i>
                <i class="bi bi-file-person-fill text-white"></i>
                <i class="bi bi-file-person-fill text-dark"></i>
                
            </div>
            <h2 class="text-center display-4 mb-5">
                Artistas</h2>

            <p class="lead text-center pb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed beatae ipsa
                optio laudantium eligendi, recusandae labore enim alias quasi commodi! Laborum, fugit nostrum aperiam
                dolore quibusdam ut rerum nihil autem.</p>

            <div class="row text-center text-dark">
                <div class="col-12 col-md-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="https://optimistic-golick-1ff879.netlify.app/img/perfil.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nombre Artista #1</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque cumque exercitationem distinctio veritatis repellendus.</p>
                          <a href="/perfil.html" class="btn btn-primary">Ver perfil</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="https://optimistic-golick-1ff879.netlify.app/img/perfil.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nombre Artista #2</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque cumque exercitationem distinctio veritatis repellendus.</p>
                          <a href="/perfil.html" class="btn btn-primary">Ver perfil</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="https://optimistic-golick-1ff879.netlify.app/img/perfil.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nombre Artista #3</h5>
                          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit similique accusantium consequatur reprehenderit asperiores.</p>
                          <a href="#artistas" class="btn btn-primary">Ver perfil</a>
                        </div>
                      </div>
                </div>
            </div>


        </div>
        

    </section>
    <!-- Artistas -->

  


<!-- Footer -->
<footer class="container-fluid bg-dark py-5 text-center text-light ">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Vero necessitatibus unde aspernatur. Facilis, ab alias? Nesciunt, ducimus a deserunt iure laudantium voluptatum perferendis ipsam libero, ipsum illo laboriosam? Quaerat, autem?</p>
    <hr>
    @2021 - All Right Reserved. Designed and Developed by ls-urrutia
    </footer>
    <!-- Footer -->
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</body>

</html>
