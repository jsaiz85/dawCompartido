

<html>
    <head>
        <title>Hola Mon</title>  
    
    </head>

    <body>
    <?php
 $numeros=array();
 $num=10;
 $suma=0;
 for ($x=0;$x<$num;$x++) {
    $numerosAleatorios=rand(1,9);
    array_push($numeros,$numerosAleatorios); 
    $suma=$suma+$numeros[$x];
 }
 
 echo json_encode($numeros);
 ?>
 <br>
 <?php
 echo "La suma total es ".json_encode($suma);
?>
    </body>



</html>