<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8"/>
  <head>
     <link href = "EstiloDropDown.css" rel = "stylesheet" type = "text/css"> 
    <meta charset="UTF-8"/>
    <title>Semana 05</title>
    <style>
        h1{
            font-family: Arial;
            text-align: center;
            font-size: 20pt;
        }
        h2{
            text-indent: 30px;
            font-family: Arial;
            font-size: 15pt;
        }
    </style>
  
  </head>
  
  <body>
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
    <br>    
    <h1>Imprimindo os primeiros 30 números da sequência de Fibonacci (forma estatica):</h1>
    <a href = "./Sem5.html">Voltar para a lista de exercicios</a>
    <br>    
    <h2>Sequência:</h2>
    <?php

      static $numero = 30; 

      function fibonacci($numero){ //metodo recursivo para fibonacci
        if ($numero == 0) {
          return 0;     
        } 
        elseif ($numero == 1) {
          return 1;     
        } 
        else {
          return (fibonacci($numero-1) + fibonacci($numero-2)); 
        }
      } 

      for ($contador = 0; $contador < $numero; $contador++){   
        echo fibonacci($contador),' '; 
      } 

    ?>
  </body>
</html>
