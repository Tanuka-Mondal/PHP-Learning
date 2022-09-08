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
           for ($i = 0; $i < 10; $i++) {
               echo $i;
               echo "<br>";
           }

           $colours = array("red", "green", "blue", "yellow", "orange", "purple", "pink", "black", "white", "grey");
           for ($i = 0; $i < count($colours); $i++) {
               echo $colours[$i];
               echo "<br>";
           } 

        ?>
    </div>
</body>
</html>
