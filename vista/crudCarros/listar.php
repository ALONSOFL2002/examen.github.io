<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Espacio del parque</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Espacios disponibles</h1>

        <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-primary btn-flat" href="index.php">
                Volver a la página de inicio
            </a>
        </div>

        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Fecha</th>
                        <th>Cantidad de tiquetes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($this->modelo->Listar() as $r):?>
                    <tr>
                        <td><?= $r->cedula?></td>
                        <td><?= $r->nombre?></td>
                        <td><?= $r->ap1?></td>
                        <td><?= $r->ap2?></td>
                        <td><?= $r->fecha?></td>
                        <td><?= $r->cantidad?></td>
                        <td>
                            <a class="btn" href="?c=Carro&a=formCarroActualizar&id=<?= $r->cedula ?>">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/alzqexpi.json"
    trigger="hover"
    colors="primary:#121331,secondary:#646e78,tertiary:#ffc738,quaternary:#f9c9c0,quinary:#ebe6ef"
    style="width:50px;height:50px">
</lord-icon>
                            </a>
                            ||
                            <a class="btn" href="?c=Carro&a=Borrar&id=<?= $r->cedula ?>">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/exkbusmy.json"
    trigger="hover"
    colors="outline:#000000,primary:#646e78,secondary:#c71f16,tertiary:#ebe6ef"
    style="width:50px;height:50px">
</lord-icon>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
