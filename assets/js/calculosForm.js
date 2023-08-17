const calcularPersonas = () => {
  const numeroAdultos = parseInt(
    document.getElementById("numero_adultos").value
  );
  const numeroNiños = parseInt(document.getElementById("numero_niños").value);
  const totalPersonas = numeroAdultos + numeroNiños;
  document.getElementById("totalPersonas").value = totalPersonas;
};
const calcularFormulario = () => {
  document.getElementById("contenedor_calcular").style.display = "inherit";
};

aceptarTerminos = () => {
  Swal.fire(
    "Felicidades!",
    "Haz aceptado nuestros términos y condiciones!",
    "success"
  );
};
