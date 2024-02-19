const fechasDisponibles = () => {
  var id_paquete = $("#paquteSeleccionado").val();
  var option =
    "<option value='0' selected>-Choisissez une date disponible-</option>";
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
    url: "../models/CuposDisponiblesFR.php",
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
  fetch("../models/ReservarModelFR.php", {
    method: "POST",
    body: fd,
  })
    .then((result) => result.text())
    .then((result) => {
      if (result == 1) {
        swalWithBootstrapButtons.fire(
          "Merci d'avoir réservé chez México Amazing Travels, où vous vivrez la meilleure expérience !",
          "Vous recevrez sous peu un message de confirmation dans votre e-mail avec le code de réservation qui vous identifiera dans notre système, avec les instructions de paiement.",
          "success"
        );
        setTimeout(function () {
          location.reload();
        }, 12000);
      } else {
        swalWithBootstrapButtons.fire(
          "Erreur",
          "Nous avons eu une erreur de base de données ou de connexion.",
          "error"
        );
        setTimeout(function () {
          location.reload();
        }, 3000);
      }
    });
}
