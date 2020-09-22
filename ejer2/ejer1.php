<html>
    <head>
        <title>Hola Mon</title>  
    
    </head>

    <body>
    <?php
    $var = rand(1,10);

    if($var < 5){
        echo "Suspendido";
    }

    if(($var >= 5) && ($var <=6)) {
        echo "Suficiente";
    }

    if(($var > 6) && ($var <=7)) {
        echo "Bien";
    }
     

    if(($var > 7) && ($var < 9)) {
        echo "Notable";
    }

    if(($var > 9) && ($var <=10)) {
        echo "Sobresaliente";
    }

    
    ?>
    </body>



</html>