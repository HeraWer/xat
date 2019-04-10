<!--<?php echo htmlspecialchars($_POST['nom']); ?> -->
<!-- <?php echo $_POST['missatge']; ?> -->
<?php
$nom = $_POST ['nom'];
$missatge = $_POST ['missatge'];
$hora = date('Y-m-d H:i:s');
if (strlen($nom) == 0 OR strlen($missatge) == 0)  {
  header('Location: error.php');
  exit;
}else {
$conexion = mysqli_connect('127.0.0.1:3307', 'root', '', 'xat' );
$sql = "INSERT INTO missatges (usuari, text, hora) VALUES ('$nom', '$missatge', '$hora')";
$result = mysqli_query($conexion, $sql);
header('Location: index.php');
exit;
}
?>
