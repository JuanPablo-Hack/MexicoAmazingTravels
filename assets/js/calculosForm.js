const calcularPersonas = () => {
  const numeroAdultos = parseInt(
    document.getElementById("numero_adultos").value
  );
  const numeroNiños = parseInt(document.getElementById("numero_niños").value);
  const totalPersonas = numeroAdultos + numeroNiños;
  document.getElementById("totalPersonas").value = "Total de personas: " + totalPersonas;
};
const calcularFormulario = () => {
  var id_destino = $("#destinoSeleccionado").val();
  var id_paquete = $("#paquteSeleccionado").val();
  var id_viaje = $("#fechas_disponibles").val();
  var totalPersonas = $("#totalPersonas").val();
  $.ajax({
    url: "../models/CalcularPrecio.php",
    method: "POST",
    data: {
      id_destino: id_destino,
      id_paquete: id_paquete,
      totalPersonas: totalPersonas,
      id_viaje: id_viaje,
    },
    success: function (respuesta) {
      $("#formCalcular").html(respuesta);
    },
  });
};

aceptarTerminos = () => {
  Swal.fire(
    "Felicidades!",
    "Haz aceptado nuestros términos y condiciones!",
    "success"
  );
};
