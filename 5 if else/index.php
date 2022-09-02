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
            $m = 20;
            if ($m >0 && $m < 12) {
                echo "Good Morning";
            } elseif ($m > 12 && $m < 18) {
                echo "Good Afternoon";
            } elseif ($m > 18 && $m < 24) {
                echo "Good Evening";
            } else {
                echo "Invalid Time";
            }
        ?>
    </div>
</body>
</html>
