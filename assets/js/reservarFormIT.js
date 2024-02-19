const fechasDisponibles = () => {
  var id_paquete = $("#paquteSeleccionado").val();
  var option =
    "<option value='0' selected>-Scegli una data disponibile-</option>";
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
    url: "../models/CuposDisponiblesIT.php",
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
  fetch("../models/ReservarModelIT.php", {
    method: "POST",
    body: fd,
  })
    .then((result) => result.text())
    .then((result) => {
      if (result == 1) {
        swalWithBootstrapButtons.fire(
          "Grazie per aver prenotato presso México Amazing Travels, dove vivrai la migliore esperienza!",
          "A breve riceverai nella tua email un messaggio di conferma con il codice di prenotazione che ti identificherà nel nostro sistema, con le istruzioni per il pagamento.",
          "success"
        );
        setTimeout(function () {
          location.reload();
        }, 12000);
      } else {
        swalWithBootstrapButtons.fire(
          "Errore",
          "Si è verificato un errore nel database o nella connessione.",
          "error"
        );
        setTimeout(function () {
          location.reload();
        }, 3000);
      }
    });
}
