const calcularPersonas = () => {
  const numeroAdultos = parseInt(
    document.getElementById("numero_adultos").value
  );
  const numeroNiños = parseInt(document.getElementById("numero_niños").value);
  const totalPersonas = numeroAdultos + numeroNiños;
  document.getElementById("totalPersonas").value =
    "Total Leute: " + totalPersonas;
};
const calcularFormulario = () => {
  var id_destino = $("#destinoSeleccionado").val();
  var id_paquete = $("#paquteSeleccionado").val();
  var id_viaje = $("#fechas_disponibles").val();
  var totalPersonas = $("#totalPersonas").val();
  $.ajax({
    url: "../models/CalcularPrecioGR.php",
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
        "Wenn Sie sich dazu entschließen, auf die Schaltfläche „Preis berechnen“ zu klicken, erklären Sie sich damit einverstanden, die Allgemeinen Geschäftsbedingungen zu akzeptieren. ",
      text: "Bevor Sie fortfahren, empfehlen wir Ihnen, die Allgemeinen Geschäftsbedingungen am Ende der Seite zu lesen!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "ja, ich akzeptiere",
      cancelButtonText: "Nein, abbrechen",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          "Glückwunsch!",
          "Sie haben unsere AGB akzeptiert!",
          "success"
        );
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Abgesagt",
          "Ihre Datei wurde gespeichert",
          "error"
        );
      }
    });
};
