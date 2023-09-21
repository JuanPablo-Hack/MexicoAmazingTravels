<?php
include '../config/DataBase.php';
$id = $_POST['id'];
$SQL = "SELECT * from viajes where id_paquete  = $id";
$result = $conexion->query($SQL);
while ($row = mysqli_fetch_array($result)) { ?>
   <option value="<?php echo $row['id']; ?>"><?php echo $row[
    'fecha_disponible'
]; ?></option>

   <?php }

?>
