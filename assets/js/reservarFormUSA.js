const fechasDisponibles = () => {
  var id_paquete = $("#paquteSeleccionado").val();
  var option =
    "<option value='0' selected>-Elije una fecha disponible-</option>";
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
    url: "../models/CuposDisponiblesUSA.php",
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
  fetch("../models/ReservarModelUSA.php", {
    method: "POST",
    body: fd,
  })
    .then((result) => result.text())
    .then((result) => {
      if (result == 1) {
        swalWithBootstrapButtons.fire(
          "Thank you for booking at México Amazing Travels, where you will live the best experience!",
          "You will shortly receive a confirmation message in your email with the reservation code that will identify you in our system, with payment instructions.",
          "success"
        );
        setTimeout(function () {
          location.reload();
        }, 3000);
      } else {
        swalWithBootstrapButtons.fire(
          "Error",
          "We have had a database or connection error.",
          "error"
        );
        // setTimeout(function () {
        //   location.reload();
        // }, 3000);
      }
    });
}
