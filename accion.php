<html>
  <head>
    <title>PHP Test</title>
       <link rel="stylesheet" href="Action.css">
  </head>
  <body>
      <div class="block">
    DATOS CAPTURADOS <br>
      <hr class="new1">
    <p>Nombre:<?php echo htmlspecialchars($_POST['nombre']); ?>.<br></p>
      <hr class="new1">
    <p>Apellido Paterno:<?php echo htmlspecialchars($_POST['paterno']); ?>.<br></p>
      <hr class="new1">
    <p>Apellido Materno:<?php echo htmlspecialchars($_POST['materno']); ?>.<br></p>
      <hr class="new1">
    <p>Telefono:<?php echo htmlspecialchars($_POST['numer']); ?>.<br></p>
      <hr class="new1">
    <p>Correo:<?php echo htmlspecialchars ($_POST['correo']); ?> <br></p>
      <hr class="new1">
    <p>Direccion:<?php echo htmlspecialchars($_POST['dire']); ?>.<br></p>
      <hr class="new1">

 <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
      </div>
  </body>
</html>