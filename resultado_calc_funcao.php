<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    function media($n1, $n2, $n3)
    {
        
        $media = ($n1 + $n2 + $n3) / 3;
        echo "<h3> Cálculo de média </h3>";
        echo "A média das notas: <br><br>";
        echo "Nota 1: $n1 <br>";
        echo "Nota 2: $n2 <br>";
        echo "Nota 3: $n3 <br>";
        echo "Média é $media";
    }
    if (isset($n1) || isset($n2) || isset($n3)){
    media($n1, $n2, $n3);
    }
}else{
    echo "Nenhuma nota foi digitada";
}
?>