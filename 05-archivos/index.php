<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir Archivos</title>
</head>
<body>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
     <div>
        <label for="nombre">Ingrese su nombre</label>
        <input type="text" id="nombre" name="nombre">
      </div>
     <div>
        <label for="archivo">Ingrese un archivo</label>
        <input type="file" name="archivo" multiple>
      </div>
      <button>Subir</button>
  </form>

</body>
</html>