<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Organizados</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <section class="tamañofondo">
        <header class="bg-dark text-light w-100 p-2">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
                    <span class="navbar-text ms-5">
                        <h1>Organizador de limpieza</h1>
                    </span>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Iniciar Sesión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">disabled</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-6">
                </div>
            </div>
        </header>
        <div class="row align-items-center justify-content-center h-75 w-100">
            <div>
                <h1>Tu calendario:</h1>
            </div>
        <?php 
            $usuario = $_POST["usuario"];
            echo $usuario;
        ?>
        </div>
    </section>
    <!-- footer -->
    <footer class="text-center bg-light">
        <div class="row pt-5 g-0">
            <!-- <div class="col-12 p-5">
                    <p class="text-dark">

                      </p>
                </div> -->
            <div class="col-12">
                <div class="row text-dark g-0">
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12 pb-4">
                                <h6>Enlaces</h6>
                            </div>
                            <div class="col-12 col-sm-4 m-auto">
                                <a href="https://github.com/Pollitodetroya" class="text-dark">github</a>
                            </div>
                            <div class="col-12 col-sm-4 m-auto">
                                <a href="https://po.ta.to/" class="text-dark">twitter</a>
                            </div>
                            <div class="col-12 col-sm-4 m-auto">
                                <a href="https://po.ta.to/" class="text-dark">linkedln</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5 bg-secondary">
                <div class="">
                    © 2022 Copyright:
                    <a class="text-white" href="https://github.com/Pollitodetroya">Pollitodetroya</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>