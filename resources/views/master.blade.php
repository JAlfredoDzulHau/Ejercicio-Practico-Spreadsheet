<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
    <!--Importamos el CDN de Bootstrap v5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <!--Importamos el CDN de Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Dispensador Haa</title>
    <script
		src="https://code.jquery.com/jquery-3.4.1.js"
		integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
		crossorigin="anonymous">
    </script>
	
   
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-black bg-light">
  <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img
            src="http://lvic.biz/pure2019/image/cache/catalog/products/dispensadores/Compact%202000%20FQ-250x250-480x605.png"
            height="120"
            alt="MDB Logo"
            loading="lazy"
            />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item develop">
            <a class="nav-link" href="servicios"><i class="fas fa-tint"></i> Servicios</a>
                <ul class="ul-second">
                    <li class="nav-item develop">
                    <a href="venta_dispensador">Venta <i class="fas fa-tag"></i>Dispensadores</a>
                    <li class="nav-item develop">
                        <a href="renta_dispensador">Renta Dispensadores</a>
                </ul>
            </li>
            
            <li class="nav-item">
            <a class="nav-link" href="contacto"><i class="bi bi-person-lines-fill"></i> Contacto</a>
            </li>
        </ul>
   
    </div>      
</nav>
<!-- Navbar -->
<div class="container">
        @yield("content")
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>