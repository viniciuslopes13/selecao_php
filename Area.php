<?php

class Area {
    
    function areaQuadrados($area){
        $ant = $area-1;
        return ($area*$area+$ant*$ant);
    }
}

$teste = new Area();
$num = $teste->areaQuadrados(4);
print_r($num);