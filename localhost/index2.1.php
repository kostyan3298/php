<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Окружности</title>
</head>
<body>
    <style>
        .circle{
            position: absolute;
            top: 200px;
            left: 200px;
            border: 1px solid red;
            border-radius: 50%;
            display: block;
        }
    </style>


    <?php
    for ($i=1; $i < 11; $i++) { 
        echo "<div class='circle' style='width:",$i*15+20,"px; height:",$i*15+20,"px;'></div>";
    }
    ?>


</body>
</html>