<?php
  if ($_POST) {
    $nombreFromPost = trim($_POST["nombre"]);
    $emailFromPost = trim($_POST["email"]);

    function validacionNombre(){
      if (empty($nombreFromPost)) {
        echo "Debe completar el nombre<br>";
      }
    }

    function validacionEmail(){
      if (empty($emailFromPost)) {
        echo "Debe completar el email<br>";
      } elseif (filter_var($emailFromPost, FILTER_VALIDATE_EMAIL) == false) {
        echo "El campo email no tiene el formato correcto";
      }
    }
  };
 ?>

<!DOCTYPE HTML>
<html>
    <body>
      <form action = "formulario.php" method = "post" >
        <label for = "nombre" > Nombre : </label>
        <input
          type = "text"
          name = "nombre"
          value="<?= isset($nombreFromPost) ? $nombreFromPost : ''; ?>"
        >
        <br>
        <?= $_POST ? validacionNombre() : ''; ?>
        <label for = "email" > E - mail : </label>
        <input
          type = "text"
          name = "email"
          value="<?= isset($emailFromPost) ? $emailFromPost : ''; ?>"
        >
        <br>
        <?= $_POST ? validacionEmail() : ''; ?>
        <input type = "submit" >
      </form>
    </body>
</html>
