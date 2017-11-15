<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <style media="screen">
      body {
        padding-top: 50px;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <?php
      $test = fopen('eltestfinal.txt', 'r') or die ("No se pudo leer el archivo");
      $json = json_decode(fgets($test), true);
      echo "<form action='respuesta.php' method='post'>";
      for ($i = 0; $i < count($json); $i++) {
        for ($j=0; $j < count($json[$i]); $j++) {
          if (is_array($json[$i][$j])){
            for ($k=0; $k < 1; $k++) {
              if ($j >= 1) {
                echo "<input type='radio' name='resp".$i."' value='".$j."'>".$json[$i][$j][$k]."<br>";
              }
              else {
                echo $json[$i][$j][$k]."<br>";
              }
            }
          }
        }
        echo "</p>";
      }
      echo "<input type='submit' class='form-check-input' name='enviar' value='Enviar'>";
      echo "</form>";
    ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
