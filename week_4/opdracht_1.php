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

function rand_string( $length ) {  
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";  
    $size = strlen( $chars );
    $str="";    
    for( $i = 0; $i < $length; $i++ ) {  
    $str= $str . $chars[ rand( 0, $size - 1 ) ];   
    }  
    return $str;
    }  

    echo "Postcode = ".rand(1000,9999)." " . rand_string(2);



?>
</body>
</html>