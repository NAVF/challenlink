<?php

function findPoint($strArr)
{
    $arrayString1 = explode(",",$strArr[0]);
    $arrayString2 = explode(",",$strArr[1]);
    $strReturn = "";
    
    //===seleccionamos la cadena de menor tamaño para iterar, asi haremos menos iteraciones======================
    if (count($arrayString1) <= count($arrayString2)) {
        $arrayPrincipal = $arrayString1;
        $arrayComparar = $arrayString2;
    }else{
        $arrayPrincipal = $arrayString2;
        $arrayComparar = $arrayString1;
    }
    //==========================================================================================================
    
    //=====iteramos verificando en el array principal las intersecciones=======================================
    foreach($arrayPrincipal as $valorBuscar){
        if (in_array($valorBuscar, $arrayComparar)) {
            $strReturn .= $valorBuscar.",";
        }
    }
    //=========================================================================================================
    
    return empty($strReturn)? "false" : trim($strReturn,",");
}

// keep this function call here
echo findPoint(['1, 3, 4, 7, 13', '1, 2, 4, 13, 15']);
echo "<br>";
echo findPoint(['1, 3, 9, 10, 17, 18', '1, 4, 9, 10']);
echo "<br>";
echo findPoint(['3, 17, 18', '1, 4, 9, 10']);
