<?php
    require_once("controllers/arreglo.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2</title>
</head>
<body style="background-color: #000000;">
    <div class="titulostyle">
    <img src="../2/utils/metroidlogo.png.png" class="titulo" alt="...">
    </div>
    <div>
    <h1 style="text-align:center; color: #EE2629;">Bestiario</h1>
    <br>
        <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Localización</th>
                    <th scope="col">Icono</th>
                    <th scope="col">Ver</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach (monstruos_controller::mostrar() as $monstruos) {?>
            <tr>
                <td scope="row"><?php echo $monstruos->getNombre()?></td>
                <td><?php echo $monstruos->getDescripcion()?></td>
                <td><?php echo $monstruos->getLocalizacion()?></td>
                <td><img src="<?php echo $monstruos->getIcon()?>" width="60" height="60"></td>
                <td><a href="<?php echo $monstruos->getVer() ?>"><button type="button" class="btn btn-secondary" style="background-color: #10121F; color: #CFD7DD;">Button</button></a></td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>