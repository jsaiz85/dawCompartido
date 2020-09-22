<html>
    <form action="ejercicio2.php" method="post">    
        <p>Introduce un numero: <input type="numeric" name="numero" size="40"></p>
        <p>Introduce un numero: <input type="numeric" name="numero2" size="40"></p>
        <input type="submit" value="Enviar">
    </form>
</html>



<?php
    $n1=$_POST["numero"];
    $n2=$_POST["numero2"];
    if ($n1>$n2){
        echo $n1." Es mayor que ".$n2;
    }else{
        echo $n2." Es mayor que ".$n1;
    }

?>
