var formulario = document.getElementById("formulario");
const validar = (e) => {
  let nombre = document.getElementById("nombre");
  let ap = document.getElementById("ap");
  let am = document.getElementById("am");
  let correo = document.getElementById("correo");
  let telefono = document.getElementById("telefono");
  if (nombre.value == "") {
    alert("El nombre es requerido");
    nombre.focus();
    e.preventDefault();
  } else if (ap.value == "") {
    alert("El apellido paterno es requerido");
    ap.focus();
    e.preventDefault();
  } else if (am.value == "") {
    alert("El apellido materno es requerido");
    am.focus();
    e.preventDefault();
  } else if (correo.value == "") {
    alert("El correo es requerido");
    correo.focus();
    e.preventDefault();
  } else if (telefono.value == "") {
    alert("El teléfono es requerido");
    e.preventDefault();
  }
};

formulario.addEventListener("submit", validar);

function preguntar() {
  return confirm(
    "¿Los datos son correctos? Es importante que lo sean para poder comunicarnos contigo."
  );
}
