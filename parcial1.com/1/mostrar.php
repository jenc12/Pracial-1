<?php 
    require_once("controllers/arreglo.php");
    if (isset($_GET["num"])){
        $num = $_GET["num"];
    }
?>

<?php foreach (autos_controller::mostrar() as $autos) {
        
        if($autos->getId() == $num){ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial 1</title>
</head>
<body style="background-color: #B0F2B4">
    <div class="container">
    <h1 style="text-align:center; color: green;">Auto seleccionado</h1>
            <div class="row">
    <div style="text-align: center;">
        <h5><img src="<?php echo $autos->getIcon()?>" width="500" height="350"></h5>
    </div>
    <table class="table table-success table-striped table-hover table-bordered table-sm table-responsive-sm" style="text-align: center;">
            <thead>
                <tr>
                    <th scope="col" style="text-align:center">ID</th>
                    <th scope="col" style="text-align:center">Marca de Auto</th>
                    <th scope="col" style="text-align:center">Modelo</th>
                    <th scope="col" style="text-align:center">Precio</th>
                    <th scope="col" style="text-align:center">Dias de alquiler</th>
                    <th scope="col" style="text-align:center">Precio a pagar</th>
                    <th scope="col" style="text-align:center">Foto</th>
                </tr>
            </thead>
        <tbody>
        <tr>
        <th scope="row"><?php echo $autos->getId()?></th>
                <td><?php echo $autos->getMarca()?></td>
                <td><?php echo $autos->getModel()?></td>
                <td><?php echo $autos->getPrice()?></td>
                <td><?php echo $autos->getLeaseDays()?></td>
                <td><?php echo $autos->multi()?></td>
                <td><img src="<?php echo $autos->getIcon()?>" width="100" height="60"></td>
        </tr>
        </tbody>
        </body>
        </html>
    <?php } 
}?>