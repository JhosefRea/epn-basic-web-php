<?php
$personas='';
    if($_POST){
        if($_POST['nombre']!=''&&$_POST['apellido']!=''){
            $personas=$_POST['persona'];
            $personas=$personas.$_POST['nombre'].' '.$_POST['apellido'].',';
        }else
        echo "Necesita llenar los nombres y apellidos";
        
    }
?>
<html>
    <head>
        <title>Registro de nombres</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
        <form method="POST" action="ejercicio2.php">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                     <input type="hidden" class="form-control" 
                     name="persona"
                      value="<?php echo $personas;?>">

                     <div class="col-md-12">
                               <h1>Registrar Persona</h1>
                    </div>
                    <div class="col-md-12">
                                <label>Ingresa un nombre</label>
                                <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="col-md-12">

                    <label>Ingresa un apellido</label>
                            <input type="text" class="form-control" name="apellido">
                    </div>
                    <div class="col-md-12">
                        <br/>
                            <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                    <div class="col-md-12">
                        <br/>
                        <h5>Personas</h5>
                        <h6><?php echo $personas;?></h6>
                    </div>
                </div>
            </div>

        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>