<link rel="stylesheet" type="text/css" href="style.css">
<?php
$num = $_POST['num1'];
$num = $_POST['num2'];
function soma($num, $num2,){
    return $num1 + $num2;
}
function subtracao($num1, $num2){
    return $num1 - $num2;
}
function mult($num1, $num2){
    return $num1 * $num2;
}
function divisao($num1, $num2){
    return $num1 / $num2;
}

echo "<h4> A soma de $num1 e $num2 é ".soma($num1, $num2)."</h4>";
echo "<h4> A subtracao de $num1 e $num2 é ".subtracao($num1, $num2)."</h4>";
echo "<h4> A multiplicacao de $num1 e $num2 é ".mult($num1, $num2)."</h4>";
echo "<h4> A divisao de $num1 e $num2 é ".divisao($num1, $num2)."</h4>";

echo "<h4> <a href='formulas.html'> Tente outras números </a> </h4>";
echo "<h4> <a href=index.html'> Sair </a> </h4>";

?>