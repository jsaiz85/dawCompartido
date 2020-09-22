<html>
    <form action="ejercicio2.php" method="post">    
        <p>Introduce un numero: <input type="numeric" name="numero" size="40"></p>
        <input type="submit" value="Enviar">
    </form>
</html>
<?php
$n1=$_POST["numero"];
if ($n1%2==0){
    echo "El nÃºmero ".$n1." es par";
}else{
    echo "El nÃºmero ".$n1." es impar";
}

?>