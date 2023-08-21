<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

  <br>
  <br>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="justify-content-center d-flex">
                    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/qtqvorle.json"
    trigger="hover"
    colors="outline:#121331,primary:#646e78,secondary:#ebe6ef,tertiary:#4cb4fd"
    style="width:50px;height:50px">
</lord-icon>
                    </div>
                    <h2 class="text-center mb-4">Actualizar Tiquete</h2>
                    <form class="row g-3" method="post" action="?c=Carro&a=Actualizar">
                        <div class="col-12">
                            <label for="cedula" class="form-label">Cedula</label>
                            <input require class="form-control" name="cedula" type="text" placeholder="Ingrese su cedula" value="<?=$Carro->getcar_cedula()?>">
                        </div>
                        <div class="col-12">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input require class="form-control" name="nombre" type="text" placeholder="Ingrese su nombre" value="<?=$Carro->getcar_nombre()?>">
                        </div>
                        <div class="col-12">
                            <label for="ap1" class="form-label">Primer Apellido</label>
                            <input require class="form-control" name="ap1" type="text" placeholder="Ingrese su primer apellido" value="<?=$Carro->getcar_ap1()?>">
                        </div>
                        <div class="col-12">
                            <label for="ap2" class="form-label">Segundo Apellido</label>
                            <input require class="form-control" name="ap2" type="text" placeholder="Ingrese su segundo apellido" value="<?=$Carro->getcar_ap2()?>">
                        </div>
                        <div class="col-12">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input require class="form-control" name="fecha" type="date" placeholder="Ingrese la fecha de visita" value="<?=$Carro->getcar_fecha()?>">
                        </div>
                        <div class="col-12">
                            <label for="cantidad" class="form-label">Cantidad a comprar</label>
                            <select class="form-select" name="cantidad" id="cantidad">
                                <option value="">Seleccionar</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary" type="submit">Actualizar</button>
                            <a class="btn btn-danger" href="index.php">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>