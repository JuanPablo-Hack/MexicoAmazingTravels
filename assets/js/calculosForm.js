


const calcularPersonas = () => {
    const numeroAdultos = parseInt(document.getElementById("numero_adultos").value);
    const numeroNiños = parseInt(document.getElementById("numero_niños").value);
    const totalPersonas = numeroAdultos + numeroNiños;
    document.getElementById("totalPersonas").value = totalPersonas;
}
const calcularFormulario = () => {
    const paquteSeleccionado = document.getElementById("paquteSeleccionado").value;
    const precioPaquete = 1975;
    const mensajeAlertaPrecio = "El precio por el paquete " + paquteSeleccionado + " es de la siguiente cantidad: " + precioPaquete;
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger",
        },
        buttonsStyling: true,
    });
    swalWithBootstrapButtons
        .fire({
            title: mensajeAlertaPrecio,
            icon: "info",
            confirmButtonText: "Si, estoy consciente del precio",
            reverseButtons: true,
        })
}