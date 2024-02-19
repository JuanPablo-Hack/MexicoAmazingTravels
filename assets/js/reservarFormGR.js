const fechasDisponibles = () => {
  var id_paquete = $("#paquteSeleccionado").val();
  var option =
    "<option value='0' selected>-Wählen Sie ein verfügbares Datum-</option>";
  $.ajax({
    url: "../models/FechasDisponibles.php",
    method: "POST",
    data: {
      id: id_paquete,
    },
    success: function (respuesta) {
      $("#fechas_disponibles").attr("disabled", false);
      $("#fechas_disponibles").html(option + respuesta);
    },
  });
};
const cuposDisponibles = () => {
  var id_viaje = $("#fechas_disponibles").val();
  $.ajax({
    url: "../models/CuposDisponiblesGR.php",
    method: "POST",
    data: {
      id: id_viaje,
    },
    success: function (respuesta) {
      $("#cuposdisponibles").html(respuesta);
    },
  });
};
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("FormReservar")
    .addEventListener("submit", crearReservacion);
});
async function crearReservacion(e) {
  e.preventDefault();
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
  });
  var form = document.getElementById("FormReservar");
  const fd = new FormData(form);
  fd.append("accion", "alta");
  fetch("../models/ReservarModelGR.php", {
    method: "POST",
    body: fd,
  })
    .then((result) => result.text())
    .then((result) => {
      if (result == 1) {
        swalWithBootstrapButtons.fire(
          "Vielen Dank für Ihre Buchung bei México Amazing Travels, wo Sie das beste Erlebnis erleben werden!",
          "Sie erhalten in Kürze eine Bestätigungsnachricht per E-Mail mit dem Reservierungscode, der Sie in unserem System identifiziert, sowie mit Zahlungsanweisungen.",
          "success"
        );
        setTimeout(function () {
          location.reload();
        }, 12000);
      } else {
        swalWithBootstrapButtons.fire(
          "Fehler",
          "Es ist ein Datenbank- oder Verbindungsfehler aufgetreten.",
          "error"
        );
        setTimeout(function () {
          location.reload();
        }, 3000);
      }
    });
}
