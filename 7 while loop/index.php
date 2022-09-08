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
           $x = 0;
           while($x < 20){
               echo "The number is: $x <br>";
               $x++;
           }

           $colours = array("red", "green", "blue", "yellow", "orange", "purple", "pink", "black", "white", "grey");
            $a = 0;
            while($a < count($colours)){
                echo "$colours[$a] <br>";
                $a++;
            }

        ?>
    </div>
</body>
</html>
