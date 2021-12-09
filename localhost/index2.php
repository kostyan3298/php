<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Четные числа</title>
</head>
<body>

<style>
    span{
        color:green;
    }
</style>

    <?php
        $sum=0;
for ($i=1; $i<=10 ; $i++) { 
    if ($i%2==0) 
    echo "<p>", $i*2, "</p>";
    $sum+=$i;
}
for ($i=1; $i<=20 ; $i++) { 
    if ($i%2==0) echo "<span style='font-size:", $i*5,"px'>$i</span>";
    //$sum+=$i;
}

 echo "<p style='font-size:", $i*2,"px'>$sum</p>";







?>
</body>
</html>