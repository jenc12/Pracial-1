<?php
    require_once("controllers/arreglo.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial 1</title>
</head>
<body style="background-color: #F7F7F7">
    <div class="container" style>
    <h1 style="text-align:center">Lista de autos</h1>
            <div class="row">
        <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col" style="text-align:center">ID</th>
                <th scope="col" style="text-align:center">Marca de Auto</th>
                <th scope="col" style="text-align:center">Modelo</th>
                <th scope="col" style="text-align:center">Precio</th>
                <th scope="col" style="text-align:center">Dias de alquiler</th>
                <th scope="col" style="text-align:center">Precio a pagar</th>
                <th scope="col" style="text-align:center">Foto</th>
                <th scope="col" style="text-align:center">Ver</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (autos_controller::mostrar() as $autos) {?>
            <tr>
                <th scope="row"><?php echo $autos->getId()?></th>
                <td><?php echo $autos->getMarca()?></td>
                <td><?php echo $autos->getModel()?></td>
                <td><?php echo $autos->getPrice()?></td>
                <td><?php echo $autos->getLeaseDays()?></td>
                <td><?php echo $autos->multi()?></td>
                <td><img src="<?php echo $autos->getIcon()?>" width="100" height="60"></td>
                <td><a href="<?php echo $autos->getVer() ?>"><button type="button" class="btn btn-secondary">Button</button></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>