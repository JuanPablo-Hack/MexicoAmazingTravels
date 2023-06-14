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
  var id_paquete = $("#paquteSeleccionado").val();
  $.ajax({
    url: "../models/CuposDisponibles.php",
    method: "POST",
    data: {
      id: id_paquete,
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
    buttonsStyling: true,
  });

  swalWithBootstrapButtons
    .fire({
      title: "Estas seguro que la información es la correcta?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Si, reservar ahora",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        var form = document.getElementById("FormReservar");
        const fd = new FormData(form);
        fd.append("accion", "alta");
        fetch("models/ReservarModel.php", {
          method: "POST",
          body: fd,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Agregado!",
                "Su reservación ha sido enviada con éxito, se le envíara un correo con las instrucciones del pago.",
                "success"
              );
              // form.reset();
              // setTimeout(function () {
              //   location.reload();
              // }, 2000);
            } else {
              swalWithBootstrapButtons.fire(
                "Error",
                "Hemos tenido un error a la base de datos o la conexión.",
                "error"
              );
              // form.reset();
              // setTimeout(function () {
              //   location.reload();
              // }, 2000);
            }
          });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire(
          "Cancelado",
          "Revise su información de nuevo",
          "error"
        );
      }
    });
}
