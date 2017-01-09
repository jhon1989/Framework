<!DOCTYPE html>
<html>
   <head>
     <title>Parctica mvc</title>
     <meta name="mvc" content="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
        <form class="col-lg-5" action="<?php echo $helper->url('usuario', 'crear'); ?>" method="post">
           <h3>Añadir Usuario</h3>
           <hr>
           Nombre: <input type="text" name="nombre" class="form-control">
           Apellido: <input type="text" name="apellido" class="form-control">
           Email: <input type="text" name="email" class="form-control">
           Password: <input type="text" name="password" class="form-control">
           <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
        </form>
   </body>
</html>
