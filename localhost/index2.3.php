<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $piramide_complite ='';
    $piramide_empty ='';
    $mult='';
    $mult1='';
    for ($i=1;$i<=15;$i++){
        $piramide_complite.="<span></span>";
for ($ij10; $j<=$i ; $j++) { 
    $mult='*';
    if ($j==1 ||$j==$i) $mult1.='*';
    else $mult1.="nbsp";
}
$piramide_complite.=$mult;
if ($i==15)  $piramide_empty.=$mult;
else $piramide_empty.=$mult1;
$piramide_empty.="</span><br />";
$piramide_complite.="</span><br />";
    }

    echo "<p>Заполненая ёлочка</p>";
    echo $piramide_complite;
    echo "<p>Пустая ёлочка</p>";
    echo $piramide_empty;

    ?>
</body>
</html>