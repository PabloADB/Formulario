<html>
  <head>
    <title>Credito</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php echo ''; ?> 
        <div class="block">
          <form action="accion.php" method="post" class="form">
         <h2>Credito Cimaco</h2>
         <p>Nombre: <input type="text" name="nombre" required /></p>
        <p>Apellido paterno: <input type="text" name="paterno" class="app-form-control" required /></p>
        <p>Apellido materno: <input type="text" name="materno" required /></p>
        <p>Telefono: <input type="number" name="numer" required /></p>
         <p>Correo: <input type="email" name="correo" required /></p>
          <p>Direccion: <input type="text" name="dire" /></p>
         <button>Enviar</button>
        </form>
        <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
        </block>
        </div>
  
  </body>
</html>