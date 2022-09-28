<?php
    require_once("models/persona.php");

    class monstruos_controller{
        public static function mostrar(){
            $monstruos[]= new monstruos(1, "Magmoor", "Los Magmoors son criatras con forma de serpiente que se encuentran en Tallon IV". "<br>" ." y que habitan en áreas de calor extremo, específicamente, ciertas" . "<br>".  "áreas de las Cavernas Magmoor que llevan su nombre.", "Magmoor Caverns", "./utils/magmoor.png", "mostrar.php?num=1");
            $monstruos[]= new monstruos(2, "Soldado Pirata", "Son increíblemente fuertes, blindados y bien armados.". "<br>" ." Son enemigos muy potentes, tienen un poderoso generador de ondas sísmicas para producir ondas de choque" . "<br>".  "bayonetas en sus muñecas y un sistema de sifón de energía que absorbe los disparos de rayos.", "Phazon Mines", "./utils/pirate2.gif", "mostrar.php?num=2");
            $monstruos[]= new monstruos(3, "Reina Parasito", "Un parásito hembra que ha crecido hasta alcanzar proporciones gigantescas.". "<br>" ."La criatura tiene brazos enormes y una parte superior del cuerpo corpulenta que empequeñece su región abdominal. " . "<br>".  "Las poderosas mandíbulas llenas de dientes afilados como navajas representan la mayor parte de la cabeza.", "Frigate Orpheon", "./utils/parasitequeen.png", "mostrar.php?num=3");
            $monstruos[]= new monstruos(4, "Avispa de Garras con Púas", "La avispa de guerra con púas es un miembro muy agresivo de la familia de las avispas de guerra, este insecto puede propulsar". "<br>" ."la punta de su aguijón hasta 20 metros. La punta del aguijón vuelve a crecer segundos después del lanzamiento y" . "<br>".  " contiene un compuesto ácido diseñado para predigerir a la presa.", "Burn Dome", "./utils/barbedwarwasp.png", "mostrar.php?num=4");
            $monstruos[]= new monstruos(5, "Flaahgra", "Flaahgra es una forma de vida masiva basada en plantas con un cuerpo de serpiente y brazos poderosos. Obtiene su fuerza de la luz solar.". "<br>" ."Los tentáculos que usa para adherirse al suelo también se usan para absorber agua. El sistema de hidratación mutado de la criatura" . "<br>".  "contamina la fuente de agua con excreciones nocivas, creando el entorno perfecto para el crecimiento y la nutrición de Flaahgra.", "Sunchamber", "./utils/flaahgra.png", "mostrar.php?num=5");
            $monstruos[]= new monstruos(6, "Metroid Cazador", "Los Hunter Metroids son Metroids adolescentes que tienen tentáculos de sifón de energía,". "<br>" ."lo que los hace cada vez más peligrosos. A medida que los Metroids se" . "<br>".  "desarrollan, se vuelven depredadores más eficientes.", "Tallon IV", "./utils/huntermetroid.png", "mostrar.php?num=6");
            
            return $monstruos;
        }
    }
?>