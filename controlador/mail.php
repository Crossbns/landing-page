<?php
include 'modelo/config.php';


if (!empty($_POST["btnmake"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["correo"]))
    {
        $nombre=$_POST["nombre"];
        $correo=$_POST["correo"];
        $mensaje="Estimado usuario, su formulario fue recibido. En breve lo contactaremos";
        $asunto = "Formulario completado";
        $mensaje = "Tienes un mensaje desde el formulario de tu sitio web";
        $headers = "From: noreply@example.com" . "\r\n";
        $headers = "Reply To: noreply@example.com" . "\r\n";
        $headers = "X-Mailer: PHP/" . phpversion();

        $sql=$conn->query(" INSERT INTO Contacto(Nombre, Correo)VALUES('$nombre', '$correo') ");
        $mail = @mail($correo, $asunto, $mensaje, $headers);

        if ($sql==1 && $mail) {
            echo '<div class="alert alert-danger">Correo Enviado</div>';
        }else {
            echo '<div class="alert alert-danger">Fallo al enviar</div>';
        }
    
    }else{
        echo '<div class="alert alert-warning">Alguno de los Campos Esta Vacio</div>';
    }
}

?>
