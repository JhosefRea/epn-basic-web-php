<?php 
    if($_POST){
        $numero1 = $_POST['n1'];
        $numero2 = $_POST['n2'];
        $sumaTotal = $numero1 + $numero2;
        $restaTotal = $numero1 - $numero2;
        $multiTotal = $numero1 * $numero2;
        $divTotal = $numero1 / $numero2;


    }

?>



<html>
    <head>
        <title>
            Mi primera pág
        </title>
    </head>
    <body>
        <form method="POST" action="index.php"> 
            <div>
                <label>Ingresa un número</label>
                <input type="text" name="n1">
            </div>
            
            <div>
                <label>Ingresa otro número</label>
                <input type="text" name="n2">
            </div>
            
            <div>
                <button type="submit">Sumar</button>
                <button type="submit">Restar</button>
                <button type="submit">Multiplicar</button>
                <button type="submit">Dividir</button>
            </div>

            <div>
                <h1>El resultado es:
                    <ul>
                        <li>Suma: <?php echo $sumaTotal;?></li>
                        <li>Resta: <?php echo $restaTotal;?> </li>
                        <li>Multiplicación: <?php echo $multiTotal;?> </li>
                        <li>División: <?php echo $divTotal;?></li>
                    </ul>
                    
                </h1>

            </div>
            
        </form>
    </body>
</html>