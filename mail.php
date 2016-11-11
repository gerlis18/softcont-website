<?php

  // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
  $email_to = "geradmin@softcont.tk";
  $email_subject = "Contacto desde el sitio web";

  // Aquí se deberían validar los datos ingresados por el usuario
  if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
  isset($_POST['apellido']) &&  !empty($_POST['apellido']) &&
  isset($_POST['email']) && !empty($_POST['email']) &&
  isset($_POST['telefono']) && !empty($_POST['telefono']) &&
  isset($_POST['comentario']) && !empty($_POST['comentario']) &&
  isset($_POST['direccion']) && !empty($_POST['direccion'])) {


      $email_message = "Detalles del formulario de contacto:\n\n";
      $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
      $email_message .= "Apellido: " . $_POST['apellido'] . "\n";
      $email_message .= "E-mail: " . $_POST['email'] . "\n";
      $email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
      $email_message .= "Direccion: " . $_POST['direccion'] . "\n";
      $email_message .= "Comentarios: " . $_POST['comentario'] . "\n\n";


      // Ahora se envía el e-mail usando la función mail() de PHP

      mail($email_to, $email_subject, $email_message);

     header ("Location: redirect.html");

  } else {
      echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
      echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
  }
?>
