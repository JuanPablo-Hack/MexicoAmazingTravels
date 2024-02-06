const calcularPersonas = () => {
  const numeroAdultos = parseInt(
    document.getElementById("numero_adultos").value
  );
  const numeroNiños = parseInt(document.getElementById("numero_niños").value);
  const totalPersonas = numeroAdultos + numeroNiños;
  document.getElementById("totalPersonas").value =
    "Nombre total de personnes: " + totalPersonas;
};
const calcularFormulario = () => {
  var id_destino = $("#destinoSeleccionado").val();
  var id_paquete = $("#paquteSeleccionado").val();
  var id_viaje = $("#fechas_disponibles").val();
  var totalPersonas = $("#totalPersonas").val();
  $.ajax({
    url: "../models/CalcularPrecioFR.php",
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
        "Si vous décidez d'avancer jusqu'au bouton « Calculer le prix », vous indiquez que vous acceptez les termes et conditions. ",
      text: "Avant de continuer, nous vous recommandons de lire les Conditions Générales écrites en bas de page !",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Oui j'accepte",
      cancelButtonText: "Non, annule",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          "Toutes nos félicitations!",
          "Vous avez accepté nos termes et conditions !",
          "success"
        );
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Annulé",
          "Votre fichier a été enregistré",
          "error"
        );
      }
    });
};
