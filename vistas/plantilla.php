<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

<!-- última versión fontawesome -->
<script src="https://kit.fontawesome.com/be1a5912c8.js" crossorigin="anonymous"></script>

    <title>Ejemplo MVC</title>
</head>

<body>
    <div class="container-fluid">
        <h3 class="text-center py3">WAKCO</h3>
    </div>

    <!--============================
    BOTONES
    ================================-->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">

            <?php 
                if(isset($_GET['pagina']))

                    if($_GET['pagina']=="registro")
                        <li class="nav-item">
                            <a class="nav-link active"  href="index.php?pagina=registro">Registro</a>
                        </li>
                    else
                        <li class="nav-item">
                            <a class="nav-link"  href="index.php?pagina=registro">Registro</a>
                        </li>
                    endif

                    if($_GET['pagina']=="ingreso")
                        <li class="nav-item">
                            <a class="nav-link active"  href="index.php?pagina=Ingreso">Ingreso</a>
                        </li>
                    else:
                        <li class="nav-item">
                            <a class="nav-link"  href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    endif

                    if($_GET['pagina']=="inicio")
                        <li class="nav-item">
                            <a class="nav-link active"  href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    else:
                        <li class="nav-item">
                            <a class="nav-link"  href="index.php?pagina=inicio">Inicio</a>
                        </li>
            ?>
                <!-- variable GET: GTE['varable'] son vriables que pasan como parámetros vía URL cuando es la primer variable se separa con "?" luego las siguientes se sparan con "&"  -->
                <li class="nav-item">
                    <a class="nav-link active"  href="index.php?pagina=registro">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="index.php?pagina=ingreso">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="index.php?pagina=inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="index.php?pagina=salir">Salir</a>
                </li>
            </ul>
        </div>
    </div>

    <!--============================
    CONTENIDO
    ================================-->
    <div class="container-fluid py-5">
        <div class="container">
            <?php 
            
            // ISSET: isset() determina si una variable está definida o es NULL
            if(isset($_GET['pagina'])){
                if($_GET['pagina']=="registro" ||
                   $_GET['pagina']=="ingreso"||
                   $_GET['pagina']=="inicio"||
                   $_GET['pagina']=="salir")
                   include"paginas/".$_GET['pagina'].".php";
            }else{

                include"paginas/registro.php";

            }

            
            
            ?>
        </div>
    </div>
</body>
</html>

3401171 ext 2 estefania osorio fga