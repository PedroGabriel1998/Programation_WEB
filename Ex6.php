<!DOCTYPE html> 
<html> 
  
<head> 
</head> 
  
<body> 
    <?php 
        // Defining variables 
        $B_Maior = $B_Menor = $Altura = $area = 0; 
  
        // Checking for a POST request 
        if (isset($_POST["submit"])) { 
          $B_Maior = $_POST["B_Maior"]; 
          $B_Menor = $_POST["B_Menor"]; 
          $Altura = $_POST["Altura"]; 
          $area = (($B_Maior + $B_Menor) * $Altura)/2; 
        }
    ?> 
  
        <h2>Calculando a area de um Trapézio:</h2> 
        <form method="post" action= 
            "<?php echo $_SERVER[" PHP_SELF "];?>"> 
            Base Maior: 
            <input type="number" name="B_Maior"> 
            <br> 
            <br>  
            Base Menor: 
            <input type="text" name="B_Menor"> 
            <br> 
            <br> 
            Altura: 
            <input type="text" name="Altura"> 
            <br> 
            <br>  
            <input type="submit" value = "Calcular" name="submit">
        </form> 
  
        <?php 
            echo "<h2>Area Trapezio:</h2>"; 
            echo $area; 
            echo "<br>"; 
        ?> 
</body> 
  
</html> 