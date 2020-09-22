<html>
    <form action="ejer6.php" method="post">    
        <p>Introduce un numero: <input type="numeric" name="numero1" size="40"></p>
        <p>Introduce un numero: <input type="numeric" name="numero2" size="40"></p>
        <p>Introduce un numero: <input type="numeric" name="numero3" size="40"></p>
        <p>Introduce un numero: <input type="numeric" name="numero4" size="40"></p>
        <input type="submit" value="Enviar">
    </form>
</html>
<?php
$n1=$_POST["numero1"];
$n2=$_POST["numero2"];
$n3=$_POST["numero3"];
$n4=$_POST["numero4"];

$number=array($n1,$n2,$n3,$n4);

for ($i=0; $i < $number ; $i++){
    if(($i >=15 ) && ($i <= 30)){
        echo "Los numeros". $i ."Estan entre ente 15 y 30";
    break;
    }
    if($i >30){
        echo "Los numeros". $i ."Son mayores de 30";
    break;
    }

    if($i <25){
        echo "Los numeros". $i ."Son menores de 25";
    break;
    }
}

?>