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
            $a = 10; // php is dynamic language, declaration of data type is not necessary.
            $b = 20; //assignment operator
            echo "a:";
            echo $a;
            echo "<br>";
            echo "b:";
            echo $b;
            echo "<br>";
           //operators
           //arithmetic operators
           echo "<h1>Arithmetic Operators</h1>";
           echo "Addition of a and b :";
           echo $a + $b;
           echo "<br>";
           echo "Subtraction of a and b :";
           echo $a - $b;
           echo "<br>";
           echo "Multiplication of a and b :";
           echo $a * $b;
           echo "<br>";
           echo "Division of a and b :";
           echo $a / $b;
           echo "<br>";
           echo "Modulus of a and b :";
           echo $a % $b;
           echo "<br>";

           //Comparison operators
           echo "<h1>Comparison Operators</h1>";
           echo "a is equal to b :";
           echo var_dump($a == $b);
           echo "<br>";
           echo "a is not equal to b :";
           echo var_dump($a != $b);
           echo "<br>";
           echo "a is greater than b :";
           echo var_dump($a > $b);
           echo "<br>";
           echo "a is less than b :";
           echo var_dump($a < $b);

           //Increment and decrement operators
           echo "<h1>Increment and Decrement Operators</h1>";
           $x = 5;
           echo "Value of x before increment :";
           echo $x;
           echo "<br>";
           echo "Value of x after ++x :";
           echo ++$x;
           echo "<br>";
           echo "Value of x after --x :";
           echo --$x;
           echo "<br>";
           $y = 10;
           echo "Value of y before increment :";
           echo $y;
           echo "<br>";
           echo "Value of y after y++ :";
           echo $y++;
           echo "<br>";
           echo "Value of y:";
           echo $y;
           echo "<br>";
           echo "Value of y after y-- :";
           echo $y--;
           echo "<br>";
           echo "Value of y:";
           echo $y;

           // logical operators
           echo "<h1>Logical Operators</h1>";
           $m = true;
           $n = false;
           echo "Value of m and n :";
           echo var_dump($m && $n); // && is logical AND operator, if both operands are true then result is true.
           echo "<br>";
           echo "Value of m or n :";
           echo var_dump($m || $n); // || is logical OR operator, if either operand is true then result is true.
           echo "<br>";
           echo "Value of !m :";
           echo !$m; // ! is logical NOT operator, if operand is true then result is false.
           echo "<br>";
           echo "Value of !n :";
           echo !$n;
           echo "<br>";
           echo "Value of m xor n :";
           echo var_dump($m xor $n); // xor is logical XOR operator, if operands are different then result is true.
           echo "<br>";
           
       
        ?>
    </div>
</body>
</html>
