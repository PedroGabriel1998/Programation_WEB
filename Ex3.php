<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8"/>
  <head>
     <link href = "EstiloDropDown.css" rel = "stylesheet" type = "text/css"> 
    <meta charset="UTF-8"/>
    <title>Semana 05</title>
  
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

    <li><a href = "./Sem5.html">Voltar para a lista de exercicios</a></li>

    <h1>Calculando a area de um Trapézio:</h1>
    <form name="trapezio" method = "post">
      <label for="B_Maior"> Base Maior:</label><br>
      <input type="number" id="B_Maior" name = "B_Maior" value = "$B_Maior"><br>
      <label for="B_Menor"> Base Menor: </label><br>
      <input type="number" id="B_Menor" name = "B_Menor" value = "$B_Menor"><br>
      <label for="B_Menor"> Altura: </label><br>
      <input type="number" id="Altura" name = "Altura" value = "$Altura"><br>
      <br/>
      <input type="submit" value = "Calcular">
      <br/>
    </form>

    <?php
        function AreaTrapezio($B_Maior, $B_Menor, $Altura){
            $area = ($B_Maior + $B_Menor) * $Altura)/2;
            echo "A area deste trapézio é <b>$area</b>.";                
        }

        #lê os valores

        $B_Maior = $_POST["B_Maior"];
        $B_Menor = $_POST["B_Menor";
        $Altura = $_POST["Altura";
        AreaTrapezio($B_Maior, $B_Maior);

    ?>
  </body>
</html>