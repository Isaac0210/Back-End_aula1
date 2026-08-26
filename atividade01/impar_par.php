<?php
$num = $_POST['num'];
function parOuImpar($num){
    if ($num % 2 == 0){
        return "O número $num é Par";
    }else{
        return "O número $num é Impar";
    }
}
echo parOuImpar($num);
?>