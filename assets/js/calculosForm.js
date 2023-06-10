const calcularPersonas = () => {
  const numeroAdultos = parseInt(
    document.getElementById("numero_adultos").value
  );
  const numeroNiños = parseInt(document.getElementById("numero_niños").value);
  const totalPersonas = numeroAdultos + numeroNiños;
  // TODO: Cambiar el número de totales
  document.getElementById("totalPersonas").value = totalPersonas;
};
const calcularFormulario = () => {
  document.getElementById("contenedor_calcular").style.display = "inherit";
};
const cuposDisponibles = () => {
  document.getElementById("cuposdisponibles").style.display = "inherit";
};
