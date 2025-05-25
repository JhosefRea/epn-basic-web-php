<html>
  <head>
    <title>Registro</title>
    <style>
    body {
      background: #0395FA;
    }
    h1{
      text-align:center;
    }
    div{
      text-align: center;
    }
  </style>
  </head>
  <body>
    <h1>Formulario de Registro</h1>

    <form action="1.php" method="POST" enctype="multipart/form-data">

    <div>
      <label> Ingresa tu nombre:
          <input type="text" name="nombre">
      </label>
    </div>  

    <br>
    <div>

      <label> Ingresa tu apellido:
        <input type="text" name="apellido">
      </label>

  </div>
    <div>

      <label> Ingresa tu edad:
        <input type="number" name="edad">
      </label>

  </div>
    <div>
      <p>Género:</p>
      <label> Másculino
        <input type="radio" name="genero" value="másculino">
      </label>
      <label> Femenino
        <input type="radio" name="genero" value="femenino">
      </label>
  </div>
  <div>
    <p>Habilidades</p>

      <label>
      PHP
      <input type="checkbox" name="roles[]" value="php">
      JS
      <input type="checkbox" name="roles[]" value="js">
      C++
      <input type="checkbox" name="roles[]" value="c++">
      </label>
  </div>    


    
    
  <div>
    <p>Seleccione su estado civil: </p>
      <select name="estado">
        <option value="soltero">Soltero</option>
        <option value="casado" selected >Casado</option>
      </select>
  </div>
    <div>

    <p>Comentario final: </p>

      <textarea name="mensaje" cols="50" rows="5"></textarea>

  </div>
      
      <div>
        <?php
          if(isset($_POST['envio'])){
            enviar();
          }

        ?>

        <button type="submit" name="envio">Enviar</button>

      </div>  
    
    </form>

    <?php
       // SE RECOMIENDA UTILIZAR POST
    // $_REQUEST ES PARA CUANDO NO SE SABE SI UTILIZAR POST O GET
  function enviar(){  
    $nombre = $_REQUEST['nombre'];

    $apellido = $_REQUEST['apellido'];

    $edad = $_REQUEST['edad'];

    $genero = $_REQUEST['genero'];

    $habilidades = $_REQUEST['roles'];

    $archivo = $_FILES['archivo'];
    
    $patch = $_SERVER['DOCUMENT_ROOT'].'./img/'.$archivo['name'];

    move_uploaded_file($archivo['tmp_name'],$patch);
    
    $estado = $_REQUEST['estado'];

    $mensaje = $_REQUEST['mensaje'];



    
      echo "El nombre del usuario es: $nombre <br>";
      echo "El apellido del usuario es: $apellido <br>";
      echo "La edad del usuario es: $edad <br>";
      echo "El genero del usuario es: $genero <br>";
      echo "Las habilidades del usuario son:";
    
    
    
      if($habilidades)
      {
          foreach($habilidades as $habilidad)
          {
            echo "<p>$habilidad<p>";
          }
      }

    /*if($archivo['name']!="")
    {
        $pathx = "/img/";

        $file = $archivo['name'];

        echo '<img src="'.$pathx.$file.'">';
    }*/
    echo "<br>";
    echo "El estado civil del usuario es: $estado <br>";
    echo "El mensaje del usuario es: $mensaje <br>";
    
  }
    ?>
    
  </body>
</html>