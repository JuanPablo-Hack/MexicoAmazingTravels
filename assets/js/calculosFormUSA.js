const calcularPersonas = () => {
  const numeroAdultos = parseInt(
    document.getElementById("numero_adultos").value
  );
  const numeroNiños = parseInt(document.getElementById("numero_niños").value);
  const totalPersonas = numeroAdultos + numeroNiños;
  document.getElementById("totalPersonas").value =
    "Total people: " + totalPersonas;
};
const calcularFormulario = () => {
  var id_destino = $("#destinoSeleccionado").val();
  var id_paquete = $("#paquteSeleccionado").val();
  var id_viaje = $("#fechas_disponibles").val();
  var totalPersonas = $("#totalPersonas").val();
  $.ajax({
    url: "../models/CalcularPrecioUSA.php",
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

const aceptarTerminosCalcUSA = () => {
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
        "If you decide to advance to the 'Calculate price' button, you indicate that you accept the terms and conditions. ",
      text: "¡Before proceeding, we recommend reading the Terms and Conditions written at the bottom of the page.!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes I accept",
      cancelButtonText: "No, cancel",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        calcularFormulario();
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Cancelled",
          "Your file has been saved",
          "error"
        );
      }
    });
};

Terms = () => { 
  
  Swal.fire(
    "Congratulations!",
    "You have accepted our terms and conditions!",
    "success"
  );
};
