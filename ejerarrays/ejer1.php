<html>
    <head>
        <title>Hola Mon</title>  
    
    </head>

    <body>
    <?php
    $array1    = array("a" => "green", "red", "blue");
    $array2    = array("b" => "green", "blue", "red");
    $resultado = array_diff($array1, $array2);

    print_r($resultado);
    ?>
    </body>



</html>