<!DOCTYPE html>
<html lang="pt-br">
 
 <!--
 <head>
     <link href = "EstiloDropDown.css" rel = "stylesheet" type = "text/css"> 
    <meta charset="UTF-8"/>
    <title>Semana 05</title>
  -->
  </head>
  <body>
  <!--
    <nav>
        <p>Pedro Gabriel</p>
        <ul>
            <li><a href = "index.html">Home</a></li>
                <li><a href = "#">Programação WEB</a>
                <ul>
                    <li><a href = "./Sem1.html">Semana 01</a></li>
                    <li><a href = "./Sem2.html">Semana 02</a></li>
                    <li><a href = "./Sem3.html">Semana 03</a></li>
                    <li><a href = "./Sem4.html">Semana 04</a></li>
                    <li><a href = "./Sem5.html">Semana 05</a></li>
                </ul>
                </li>
                <li><a href = "#">TCC Senai 2020</a>
                    <ul>
                        <li><a href = "./BracoRobotico.html">Braço Robótico</a></li>
                        <li><a href = "#">Eletroímã</a></li>
                        <li><a href = "#">Mesa de Sensores</a></li>
                    </ul>
                </li>
        </ul>
    </nav>
  -->
    <h1>Calculando o consumo de um veiculo que anda 55KM com 5 Litros de gasolina:</h1>
    
    <?php

      static $Quilometros = 55;
      static $litros = 5;

      $consumer = $Quilometros/$litros;

      echo "O consumo é de ", $consumer, " km/L";
    ?>
  </body>
</html>
