<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo MVC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
</head>
<body>
   <div clas="container-fluid">
       <h3 class="text-center py-3 text-info">EJEMPLO MVC, PHP y XAAMP</h3>
   </div>

   <div class="container-fluid bg-light">
       <div class="container">
           <ul class="nav nav-justified py-2 nav-pills">
                <?php  if(isset($_GET["pagina"])): ?>
                        <?php  if($_GET["pagina"]== "registro"): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                            </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                                </li>

                        <?php endif ?>

                        <?php  if($_GET["pagina"]== "ingreso"): ?>
                            <li class="nav-item">
                                <a class="nav-lin active" href="index.php?pagina=ingreso">Ingreso</a>
                            </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                                </li>

                        <?php endif ?>

                        <?php  if($_GET["pagina"]== "inicio"): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                            </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                                </li>

                        <?php endif ?>

                        <?php  if($_GET["pagina"]== "salir"): ?>
                            <li class="nav-item"> 
                                <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                            </li>
                            <?php else: ?>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                                </li>
                        <?php endif ?>
                        <!--
                            GET:$_GET["variable"]variables que se pasan como parametros via URL
                            (tambien conocido cmo cadena de consulta a trav??s de la URL)
                            cuando es la primera varible se separa con este signo ?
                            las que siguen a continuaci??n se separan con amperson &
                        -->
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  " href="index.php?pagina=inicio">Inicio</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                    </li>
                <?php endif ?>
        
            
            </ul>
       </div>
   </div>

<!--Contenido-->

   <div class="container-fluid">
       <div class="container py-5">
          
        <?php

        #ISSET: Isset()Determina si una varible esta definida o  no esta definida , y adem??s no es null

        if(isset($_GET["pagina"])){

            if($_GET["pagina"] == "registro" ||
            $_GET["pagina"] == "ingreso" ||
            $_GET["pagina"] == "inicio" ||
            $_GET["pagina"] == "salir" ){
                include "paginas/".$_GET["pagina"].".php";
                
            }else{
                include "paginas/error.php";
            }
            
            
        }else{
            include "paginas/registro.php";
        }
        ?> 


       </div>
   </div>

</body>
</html>