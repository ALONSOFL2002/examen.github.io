<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: gray;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    
    <div class="card text-center" style="max-width: 400px">
        <div class="card-body">
            <div class="d-flex justify-content-center">
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/vusrdugn.json"
    trigger="hover"
    colors="primary:#121331,secondary:#b26836,tertiary:#4bb3fd,quaternary:#f9c9c0,quinary:#ebe6ef"
    style="width:70px;height:70px">
</lord-icon>
            </div>
            <h2 class="card-title">Iniciar sesión admin</h2>
            <form action="?c=Login&a=login" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de usuario:</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" name="contra" class="form-control" required>
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mx-2">Iniciar sesión</button>
                <a class="btn btn-danger" href="index.php">Pagina principal</a>
                </div>
            </form>
            <br>
            <div class="text-center">Falla/controlador</div>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
