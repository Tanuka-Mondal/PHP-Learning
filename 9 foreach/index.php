<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div class="container">
       
        <?php
           
           $colours = array("red", "green", "blue", "yellow", "orange", "purple", "pink", "white", "grey");
           foreach ($colours as $colour) {
               echo "<div class='colour' style='background-color: $colour;'>$colour</div>";
           }

        ?>
    </div>
</body>
</html>
