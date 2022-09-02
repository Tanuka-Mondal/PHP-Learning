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
            //Datatype
            define('PI', 3.14); //constant
            $name = "Tanuka";
            echo $name;
            echo "<br>";
            echo var_dump($name);      //string(6) "Tanuka"
            echo "<br>";     
            $age = 21;
            echo var_dump($age);       //int(21)
            echo "<br>";
            $salary = 20000.80;
            echo var_dump($salary);    //float(20000.8)
            echo "<br>";
            $isAdult = true;
            echo var_dump($isAdult);   //bool(true)
            echo "<br>";
            echo PI; //3.14
            
       
        ?>
    </div>
</body>
</html>
