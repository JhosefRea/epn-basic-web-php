<?php
    $conteo=10;
    if($_POST){

        $numero1=$_POST['numero1'];
        $numero2=$_POST['numero2'];
        $conteo=$_POST['conteo'];
        $conteo= $conteo+$numero1+$numero2;
       
    }
  
?>

<html>
    <head>
        <title>Mi primer Formulario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST" action="index.php">
            <div class="row">
                
                <div class="col-md-6 offset-md-3">
                    <div class="col-md-12">
                        <h1>Sumar 2 números</h1>
                    </div>
                    <div class="col-md-12">
                        <label>Conteo Total</label>
                        <input type="text" class="form-control" name="conteo" value="<?php echo $conteo?>">
                    </div>
                    <div class="col-md-12">
                        <label>Ingresa un numero</label>
                        <input type="text" class="form-control" name="numero1">
                    </div>
                    <div class="col-md-12">
                        <label>Ingresa otro numero</label>
                        <input type="text" class="form-control" name="numero2">
                    </div>
                    <div class="col-md-12">
                        <br/>
                            <button type="submit" class="btn btn-primary">Sumar</button>
                    </div>
                    <div class="col-md-12">
                       <h1>El resultado es :

                       <?php
                        echo $conteo;
                       ?>
                       </h1>
                    </div>
                </div>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>