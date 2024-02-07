const calcularPersonas = () => {
  const numeroAdultos = parseInt(
    document.getElementById("numero_adultos").value
  );
  const numeroNiños = parseInt(document.getElementById("numero_niños").value);
  const totalPersonas = numeroAdultos + numeroNiños;
  document.getElementById("totalPersonas").value =
    "Persone totali: " + totalPersonas;
};
const calcularFormulario = () => {
  var id_destino = $("#destinoSeleccionado").val();
  var id_paquete = $("#paquteSeleccionado").val();
  var id_viaje = $("#fechas_disponibles").val();
  var totalPersonas = $("#totalPersonas").val();
  $.ajax({
    url: "../models/CalcularPrecioIT.php",
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

const aceptarTerminosCalc = () => {};

aceptarTerminos = () => {
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
        "Se decidi di passare al pulsante 'Calcola prezzo', indichi che accetti i termini e le condizioni. ",
      text: "Prima di procedere ti consigliamo di leggere i Termini e Condizioni scritti in fondo alla pagina!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "si accetto",
      cancelButtonText: "No, annulla",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          "Congratulazioni!",
          "Hai accettato i nostri termini e condizioni!",
          "success"
        );
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Annullato",
          "Il tuo file è stato salvato",
          "error"
        );
      }
    });
};
