<?php

require ("Mail.php");
function validate($name, $number, $email, $message) {
    return !empty($name) && !empty($number) && !empty($email) && !empty($message);
}

$status = "";
 
if (isset($_POST["form"])) {
    if (validate($_POST["name"], $_POST["number"], $_POST["email"], $_POST["message"])) {
        $name = $_POST["name"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $body = "$name <$email> te envia un correo";
        sendMail($name, $number, $email, $message);

        $status = "warning-success";
    } else {
        $status = "warning-danger";
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <form action="./" method="POST">
 
        <h1>CONTACTANOS</h1>
        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="number">Número de identificación:</label>
            <input type="number" name="number" id="number">
        </div>
        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message"></textarea>
        </div>
        <div class="button-container">
            <button name="form" type="submit">Enviar</button>
        </div>   
        <?php if ($status == "warning-danger"): ?>
        <div class="warning-danger">
            <span>
                <b>
                    <i>
                        Ha surgido un problema         
                    </i>
                </b> 
            </span>
        </div>
        <?php endif; ?>
    
        <?php if ($status == "warning-success"): ?>
        <div class="warning-success">
            <span>
                <b> 
                    <i>
                        ¡Se envió exitosamente! 
                    </i>
                </b>
            </span>
        </div>
        <?php endif; ?>
         <div class="contact-info">
            <h1 class="contact_letter">Dirección</h1>
            <span>Trasversa 34 a sur.</span>
            <h1 class="contact_letter">Número de contacto</h1>
            <span>3124568907</span>
         </div>
    </for>
 

</body>
</html>