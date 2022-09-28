<?php 
    require_once("controllers/arreglo.php");
    if (isset($_GET["num"])){
        $num = $_GET["num"];
    }
?>

<?php foreach (monstruos_controller::mostrar() as $monstruos) {
        
        if($monstruos->getId() == $num){ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Parcial 1</title>
</head>
<body style="background-color: #000000">
    <div class="container">
    <h1 style="text-align:center; color: #E77B00;">Monstruo seleccionado</h1>
            <div class="row">
    <div style="border-width: 2px; border-style: solid; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-left-radius: 35px; border-bottom-right-radius: 35px; border-color: #8CCCFE; background-color: #10121F">
            <div style="text-align: center;">
        <h3 style="text-align: center;"><img src="<?php echo $monstruos->getIcon()?>" width="600" height="600"></h3>
        <h3 style="text-align:center; color: #FCDC74"><th scope="col"><?php echo $monstruos->getNombre()?></th></h3>
        <p style="color: #8CCCFE"><?php echo $monstruos->getDescripcion()?></p>
            </div> 
    </div>
        </body>
        </html>
    <?php } 
}?>