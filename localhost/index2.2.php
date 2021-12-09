<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>шахматная доска</title>
</head>
<body>
    <style>
        table{
            margin: 50px auto;
            border: 5px solid gray;
        }
        td{
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
    </style>

<?php

$chess_board="<table><tbody>";
$back=true;
$figures = array(
    array('bR','bN','bB','bK','bQ','bB','bN','bR'),
    array('bR','bN','bB','bK','bQ','bB','bN','bR'),
    array('','','','','','','',''),
    array('','','','','','','',''),
    array('','','','','','','',''),
    array('','','','','','','',''),
    array('wP','wP','wP','wP','wP','wP','wP','wP'),
    array('wR','wN','wB','wK','wQ','wB','wN','wR')
);
for ($i=1; $i <9 ; $i++) { 
    $chess_board.="<tr height='90px'>";
for ($j=1; $j < 9; $j++) { 
    if ($back) {
        $color='gray';
    } else {
        $color='white';
    }
$chess_board.="<td style='background-color:$color';width:'90px'>";
if ($figures[$i-1][$j-1] !=='') {
$chess_board.="<img src='img/{$figures[$i-1][$j-1]}.png'>";
}
$chess_board.="</td>";
}



    $chess_board.="</tr>";
    $back=!$back;
}



$chess_board.="</tbody></table>";
echo $chess_board;
?>







</body>
</html>