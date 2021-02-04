<html>
    <head>
        <meta charset="UTF-8">
        <title> CCC-YT | People </title>
        <link href="../img/logo.png" rel="icon">

        <link href="../css/menu.css" rel="stylesheet">
        <link href="../css/footer.css" rel="stylesheet">
        <link href="../css/general.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/people.css">

    </head>
    <body>
        <!-- HEADER -->
        <header id="header">
            <div>
                <div id="logo">
                    <a href="../index.html"><img src="../img/PORTADA.png" height="100"/></a>
                </div>
            
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"> <a href="../index.html"> Inicio </a> </li>
                        <li> <a href="../index.html#about"> Nosotros </a> </li>
                        <li> <a href="people.php"> Personas </a>
                            <ul> 
                                <li> <a href="./people.php#adv"> Consejero </a></li>
                                <li> <a href="./people.php#dir"> Directiva </a></li>
                                <li> <a href="./people.php#mem"> Miembros </a></li>
                            </ul>
                        </li>
                        <li> <a href="../index.html#services"> Servicios </a>
                            <ul> 
                                <li> <a href="../html/eventos.html"> Eventos </a></li>
                                <li> <a href="../html/proyectos.html"> Proyectos </a></li>
                                <li> <a href="../html/cursos.html"> Cursos </a> </li>
                                
                            </ul>
                        </li>
                        <li> <a href="../index.html#contact"> contacto </a> </li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="img-box">
            <img src="../img/headerImg/peopleHeader2.jpg">
        </div>

        <!-- Start adviser -->
        <div class="text-body" id="adv">
            <h2 class="title-dir">Comunidad <span>CCC-YT</span></h2>
            
            <div class="adv-box">
                <h3 class="sub-title"><span>C</span>onsejero</h3> 
                
                <div class="row">
                    <div class="column-2">
                        <nav class="adv-img">
                            <img src="../img/directiva/Israel.jpeg" alt="img">
                        </nav>
                    </div>

                    <div class="column-2">
                        <h1 class="adv-title"><span>Phd. </span>Israel Pineda</h1>
                        <p>
                            Pertenece a la Escuela de Matemática y Ciencias Computacionales
                            en la universidad Yachay Tech. Anteriormente, trabajaba en 
                            gráficos por computadora y realidad virtual en el laboratorio 
                            de la universidad Nacional de Chonbuk en Corea del Sur. Su 
                            investigación se basó en el level set method y su uso en las
                            ciencias computacionales, gráficos por computadoras, simulación 
                            basada en la física, visión por computadoras y procesamiento de 
                            imagenes. Él ama las ciencias computacionales y la matemática.
                        </p>
                        <br>
                        <br>
                        <a href="https://www.israelpineda.com/about" class="btn" target="_blank">
                            Leer mas ...</a>
                    </div>
                </div>
                <hr>

            </div>
        </div>
        <!-- End adviser -->


            <!--start directiva-->
            <div class="dir-box" id="dir">
                <h3 class="sub-title"><span>D</span>irectiva</h3>

                <div class="presi">
                    <h2>Presidente</h2>
                    <img src="../img/directiva/Julio.jpeg" alt=""> 
                    <h3 class="overlay">Información</h3>                   
                    <p>Julio Cajas</p>
                </div>

                <div class="row">
                    <div class="column-3">                        
                        <h2>Vicepresidenta</h2>  
                        <img src="../img/directiva/Valeria.jpeg" alt="">
                        <h3 class="overlay">Información</h3>                        
                        <p>Valeria Lucero</p>                 
                    </div>

                    <div class="column-3">                        
                        <h2>Secretaria</h2> 
                        <img src="../img/directiva/Samantha.jpeg" alt="">
                        <h3 class="overlay">Información</h3>                        
                        <p>Samantha Quintachala</p>                                                   
                    </div>

                    <div class="column-3">                        
                        <h2>Financiero</h2> 
                        <img src="../img/directiva/Sherald.jpeg" alt="">
                        <h3 class="overlay">Información</h3>
                        <p>Sherald Noboa</p>                                                  
                    </div>
                </div>

                <div class="row">
                    <div class="column-3">                        
                        <h2>Asuntos Internos</h2>  
                        <img src="../img/directiva/Erick.jpeg" alt="">
                        <h3 class="overlay">Información</h3>
                        <p>Erick Tequiz</p>                  
                    </div>

                    <div class="column-3">                        
                        <h2>Comunicación</h2> 
                        <img src="../img/directiva/Carlos.jpeg" alt="">
                        <h3 class="overlay">Información</h3>
                        <p>Carlos Arevalo</p>                                                   
                    </div>

                    <div class="column-3">                        
                        <h2>Talento Humano y Logística</h2>  
                        <img src="../img/directiva/Stadyn.jpeg" alt="">
                        <h3 class="overlay">Información</h3>
                        <p>Stadyn Roman</p>                                                 
                    </div>
                </div>
                <hr>
            </div>
            <!-- end directiva-->

            <!--start members-->
            <div  class="adv-box" id="mem">
                <h3 class="sub-title"><span>M</span>iembros</h3>
                    <?php
                        include 'connection.php';

                        $ans = $conn->query("SELECT * FROM miembros"); //conjunto de filas

                        $num = 1;
                        
                        echo "<table>";
                        echo "<tr style=background-color:#df203a;color:white;>";
                        echo "<td>Nª<td>Apellido<td>Nombre<td>Carrera";
                        while($row = $ans->fetch_array()){
                            if ($num % 2 == 0){
                                echo "<tr style=background-color:grey;color:white;>";
                                echo "<td>".$num.'<td>'.$row['apel'].'<td>'.$row['nomb'].'<td>'.$row['carrera'];
                            }else{
                                echo "<tr>";
                                echo "<td>".$num.'<td>'.$row['apel'].'<td>'.$row['nomb'].'<td>'.$row['carrera'];
                            }
                            
                            $num += 1;
                        }
                        echo "</table>";
                        /*$row1 = $ans->fetch_array();
                        echo $row1['apel'].' '.$row1['nomb'].' '.$row1['carrera'];*/
                    ?>
            </div>
            <hr>
            <!--End members-->

        <footer id="footer">
            <h3>&copy; Copyright <span>CCC-YT</span>. All Rights Reserved</h3>
            <p>Designed by Alejandra Valeria Lucero Burbano & Stalyn Javier Chancay Moreira.</p>
        </footer>

        <!-- js files-->
        <script src="js/main.js"></script>
        <script src="js/menu.js"></script>
    </body>
</html>