<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
      
<?php 

$isMale = false;
$isTall = true;

// if ($isMale || $isTall){
// echo "You are a tall male";

if ($isMale && $isTall){
echo "You are a tall male";

}elseif($isMale && !$isTall)
{echo "You are a short male";
}
elseif(!$isMale && $isTall)
{echo "You are a tall female";
}
else{
    echo "You are a short female";
};


function getMax($num1,$num2,$num3){

    if ($num1 >= $num2 && $num1 >= $num3){
    return $num1;
    }elseif($num2 >= $num1 && $num2 >= $num3){
        return $num2;
    }else{
       return $num3;
    }

}
echo "<br>";
echo getMax(3,90,221);









?>

    </body>
</html>