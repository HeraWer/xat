<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <title>xateja-ho!</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <section id="titol">
      <h1>xateja-ho!</h1>
    </section>
    <section id="missatges">

    <?php

    $usuario = "root";
    $contraseña = "";
    $servidor = "127.0.0.1:3307";
    $basededatos = "xat";

$conexion = mysqli_connect($servidor,$usuario,$contraseña,$basededatos);

if (mysqli_connect_errno()) {
echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}

$sql = "select usuari, text, hora from missatges";
$result = mysqli_query($conexion, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  ?><p><span><?php echo $row ['hora'] ?> - <?php echo $row ['usuari'] ?>: </span> <?php echo $row ['text'] ?> </p> <?php
}

mysqli_free_result($result);

mysqli_close($conexion);
?>

  </section>
      <section id="formulari">
        <form action="insertar.php" method="post">
          <input type="text" name="nom" placeholder="el teu nom" size="100%">
          <br>
          <input type="text" name="missatge" placeholder="el teu missatge" size="100%">
          <br><br>
          <input type="submit" name="xateja-ho" value="xateja-ho">
        </form>
      </section>
      <section id="errors">
        <p>línia per mostrar missatges d'error</p>
      </section>
    </body>
