var formulario = document.getElementById("formulario");
const validar = (e) => {
  let nombre = document.getElementById("nombre");
  let ap = document.getElementById("ap");
  let am = document.getElementById("am");
  let correo = document.getElementById("correo");
  let telefono = document.getElementById("telefono");
  let mensaje = document.getElementById("mensaje");
  let check = true;
  if (nombre.value == "") {
    nombre.focus();
    Swal.fire({
      icon: 'error',
      title: 'ERROR!!',
      text: 'El campo Nombre es requerido'
    });
    check=false;
    e.preventDefault();
  } else if (ap.value == "") {
    ap.focus();
    Swal.fire({
      icon: 'error',
      title: 'ERROR!!',
      text: 'El campo Apellido Paterno es requerido'
    });
    check=false;
    e.preventDefault();
  } else if (am.value == "") {
    am.focus();
    Swal.fire({
      icon: 'error',
      title: 'ERROR!!',
      text: 'El campo Apellido Materno es requerido'
    });
    check=false;
    e.preventDefault();
  } else if (correo.value == "") {
    correo.focus();
    Swal.fire({
      icon: 'error',
      title: 'ERROR!!',
      text: 'El campo Correo es requerido'
    });
    check=false;
    e.preventDefault();
  } else if (telefono.value == "") {
    telefono.focus();
    Swal.fire({
      icon: 'error',
      title: 'ERROR!!',
      text: 'El campo Teléfono es requerido'
    });
    check=false;
    e.preventDefault();
  } else if (mensaje.value == "" || mensaje.value == " ") {
    mensaje.focus();
    Swal.fire({
      icon: 'error',
      title: 'ERROR!!',
      text: 'El Mensaje es requerido'
    });
    check=false;
    e.preventDefault();
  } else if(check){
    e.preventDefault();
    Swal.fire({
      title: '¿Los datos son correctos?',
      text: "Es importante que los datos sean correctos, para poder comunicarnos contigo!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Si, son correctos!',
      confirmButtonColor: '#0bae00',
      cancelButtonText: 'Modificar'
    }).then((result) => {
      if (result.isConfirmed) {
        formulario.submit();
      }
    });
  }
};

formulario.addEventListener("submit", validar);