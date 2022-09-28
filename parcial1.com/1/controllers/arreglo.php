<?php
    require_once("models/poo.php");

    class autos_controller{
        public static function mostrar(){
            $autos[]= new autos(1, "Audi", "A3", 2737, rand(1, 10), "multi()", "./images/audia3.png", "mostrar.php?num=1");
            $autos[]= new autos(2, "BMW", "X6 Vantablack", 6290, rand(1, 10), "multi()", "./images/vantablack.png", "mostrar.php?num=2");
            $autos[]= new autos(3, "Bugatti", "Type 57", 1500, rand(1, 10), "multi()", "./images/type57.png", "mostrar.php?num=3");
            $autos[]= new autos(4, "Ferrari", "296 GTB", 2054, rand(1, 10), "multi()", "./images/296gtb.png", "mostrar.php?num=4");
            $autos[]= new autos(5, "Ford", "Galaxy Monovolumen", 1000, rand(1, 10), "multi()", "./images/galaxymono.png", "mostrar.php?num=5");
            $autos[]= new autos(6, "Hyundai", "Elantra GT", 1234, rand(1, 10), "multi()", "./images/elantragt.png", "mostrar.php?num=6");
            $autos[]= new autos(7, "Mazda", "CX-9", 1052, rand(1, 10), "multi()", "./images/cx9.png", "mostrar.php?num=7");
            $autos[]= new autos(8, "Nissan", "Kicks", 1011, rand(1, 10), "multi()", "./images/kicks.png", "mostrar.php?num=8");
            $autos[]= new autos(9, "Tesla", "Model X", 1325, rand(1, 10), "multi()", "./images/modelx.png", "mostrar.php?num=9");
            return $autos;
        }
    }
?>