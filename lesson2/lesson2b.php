<?php 
// Pengkondisian dan Pengulangan
// if
// if else if else
// switch
// ternary

// if 
// if else if else
$x = 30;
if( $x < 20 ){
    echo "benar";
} elseif( $x == 20 ){
    echo "sama";
} else {
    echo "salah";
}

// switch
switch( $x ){
    case 10:
        echo "benar";
        break;
    case 20:
        echo "sama";
        break;
    default:
        echo "salah";
        break;
}

// ternary
echo ($x < 20) ? "benar" : (($x == 20) ? "sama" : "salah");
echo "<br>";


?>