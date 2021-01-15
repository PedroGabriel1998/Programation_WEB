<!DOCTYPE html> 
<html> 
  
<head> 
</head> 
  
<body> 
    <?php 
        // Defining variables 
        $name = $email = $level = $review = ""; 
  
        // Checking for a POST request 
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
          $name = $_POST["name"]; 
          $email = $_POST["email"]; 
          $review = $_POST["review"]; 
          $level = $_POST["level"]; 
        } 
  
    ?> 
  
        <h2>PHP Form Example: GFG Review</h2> 
        <form method="post" action= 
            "<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>"> 
            Name: 
            <input type="text" name="name"> 
            <br> 
            <br>  
            E-mail: 
            <input type="text" name="email"> 
            <br> 
            <br> 
            Review For GFG: 
            <textarea name="review" 
                      rows="5" cols="40"> 
            </textarea> 
            <br> 
            <br>  
            Satisfaction Level: 
            <input type="radio" name="level" 
                   value="Bad">Bad 
            <input type="radio" name="level"
                   value="Average">Average 
            <input type="radio" name="level"
                   value="Good">Good 
            <br> 
            <br> 
            <input type="submit" name="submit"
                   value="Submit"> 
        </form> 
  
        <?php 
            echo "<h2>Your Input:</h2>"; 
            echo $name; 
            echo "<br>"; 
            echo $email; 
            echo "<br>"; 
            echo $review; 
            echo "<br>"; 
            echo $level; 
        ?> 
</body> 
  
</html> 