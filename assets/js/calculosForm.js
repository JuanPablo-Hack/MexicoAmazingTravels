const calcularPersonas = () => {
  const numeroAdultos = parseInt(
    document.getElementById("numero_adultos").value
  );
  const numeroNiños = parseInt(document.getElementById("numero_niños").value);
  const totalPersonas = numeroAdultos + numeroNiños;
  document.getElementById("totalPersonas").value = totalPersonas;
};
const calcularFormulario = () => {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
  });

  swalWithBootstrapButtons
    .fire({
      title:
        "Para calcular el precio, usted acepta los términos y condciones?",
      text: "¡No podrás revertir esto!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Si, acepto",
      cancelButtonText: "No, acepto!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        var form = document.getElementById("FormReservar");
        const fd = new FormData(form);
        fd.append("accion", "alta");
        fetch("../models/ReservarModel.php", {
          method: "POST",
          body: fd,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Reserva exitosa!",
                "Su reserva ha sido realizada.",
                "success"
              );
              setTimeout(function () {
                location.reload();
              }, 3000);
            } else {
              swalWithBootstrapButtons.fire(
                "Error",
                "Hemos tenido un error a la base de datos o la conexión.",
                "error"
              );
              // setTimeout(function () {
              //   location.reload();
              // }, 3000);
            }
          });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Cancelado",
          "Por favor calcula el precio de tu reservación",
          "error"
        );
      }
    });
};
