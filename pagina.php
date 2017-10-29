<?php
  $correo = $_POST['correo'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $to = "confeccionesjavana@gmail.com";
  $subject = $asunto;
  $txt = $mensaje;
  $headers = "From:$correo" . "\r\n" .
  "CC: confeccionesjavana@gmail.com";

  if (mail($to,$subject,$txt,$headers)) {
    echo '<script>
      alert("El mensaje se ha enviado.");
      location.href="index.html";
      </script>';} else {
        echo "Error, no se ha enviado el mensaje";
      }
 ?>
