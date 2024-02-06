<?php
include '../config/DataBase.php';
$id = $_POST['id'];
$sql = "SELECT cupos_disponibles FROM viajes WHERE id = '$id'";
$result = $conexion->query($sql);
$row = $result->fetch_assoc();
?>
<input class="form-input" id="contact-phone-2" type="text" name="datos[]" value="<?php echo 'Platz verfügbar: ' .
    $row['cupos_disponibles']; ?>" readonly id="cuposdisponibles" />
