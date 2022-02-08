<?php
session_start();


if ($_POST[choice1]!= ""){
$a1 = 200;
}
if ($_POST[choice2]!= ""){
$a2 = 200;
}
if ($_POST[choice3]!= ""){
$a3 = 600;
}
if ($_POST[choice4]!= ""){
$a4 = 630;
}
if ($_POST[choice5]!= ""){
$a5 = 900;
}
if ($_POST[choice6]!= ""){
$a6 = 2200;
}
if ($_POST[choice7]!= ""){
$a7 = 800;
}
if ($_POST[choice8]!= ""){
$a8 = 900;
}
if ($_POST[choice9]!= ""){
$a9 = 450;
}
if ($_POST[choice10]!= ""){
$a10 = 500;
}
if ($_POST[choice11]!= ""){
$a11 = 2500;
}
if ($_POST[choice12]!= ""){
$a12 = 900;
}
if ($_POST[choice13]!= ""){
$a13 = 1600;
}
if ($_POST[choice14]!= ""){
$a14 = 400;
}
if ($_POST[choice15]!= ""){
$a15 = 900;
}
if ($_POST[choice16]!= ""){
$a16 = 5000;
}
if ($_POST[choice17]!= ""){
$a17 = 1200;
}
if ($_POST[choice18]!= ""){
$a18 = 250;
}
if ($_POST[choice19]!= ""){
$a19 = 1500;
}
if ($_POST[choice20]!= ""){
$a20 = 2250;
}
if ($_POST[choice21]!= ""){
$a21 = 1800;
}
$result = $a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9 + $a10 + $a11 + $a12 + $a13 + $a14 + $a15 + $a16 + $a17 + $a18 + $a19 + $a20 + $a21;


$_SESSION['message'] = 'Общая цена выбранных услуг: ' . $result . ' руб.';

header('Location: ../profile1.php');
?>