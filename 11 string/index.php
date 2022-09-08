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
        $fruit = "orange";
        echo $fruit;     
        echo "<br>";
        $size = strlen($fruit);
        echo "The length of the string is: " . $size;

        $love = "I love Python programming";
        echo "<br>";
        echo $love;
        echo "<br>";
        echo "The number of words in the string is: " . str_word_count($love);
        echo "<br>";
        echo "The reversed string is: " . strrev($love);
        echo "<br>";
        echo "The position of the word 'Python' is: " . strpos($love, "Python"); //it will show the starting index of the word
        echo "<br>";
        echo "The replaced string is: " . str_replace("Python", "HTML", $love);
        ?>
    </div>
</body>
</html>
