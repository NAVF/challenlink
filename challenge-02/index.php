<?php

function noIterate($strArr)
{
    //================VALIDAR QUE SEA DE 1 A 50=======================================================
    foreach ($strArr as $valueStr) {
        $aux_strLen = strlen($valueStr);
        if ($aux_strLen < 1 || $aux_strLen >50) {
            echo "Es necesario que las cadenas de caracteres tengan mínimo 1 y máximo 50 caracteres.";
            exit();
        }
    }
    //================================================================================================

    //=================SEPARAMOS LAS CADENAS CORRESPONDIENTES=======================================
    $strPrincipal = $strArr[0];
    $strLetrasBuscar = $strArr[1];
    //=======================================================================================

    $lenSubstr = strlen($strLetrasBuscar);
    $finishLenSubstr = strlen($strPrincipal);

    //vamos obteniendo subcadenas desde el mas pequeño posible, que es el tamaño de los caracteres a buscar, hasta el mas grande que seria el tamaño máximo de la cadena principal y validamos y existen en cada subcadena, usando la funcion "verExistenciaCaracteres"=======================================
    while ($lenSubstr < $finishLenSubstr) {
        $aux_finStartSubstr = $finishLenSubstr - $lenSubstr;
        for($startSubstr = 0; $startSubstr <= $aux_finStartSubstr; $startSubstr++){
            $substr = substr($strPrincipal, $startSubstr, $lenSubstr);
            if (verExistenciaCaracteres($substr,$strLetrasBuscar)) {
                return $substr;
            }
        }
    //================================================================================
    return $strPrincipal; //Si no encontro en las iteraciones anteriores, el ultimo que queda es la cadena completa
}

function verExistenciaCaracteres($strPrincipal,$charBuscar){
    $strPrincipalArray = str_split($strPrincipal);
    $charBuscarArray = str_split($charBuscar);

    $flagExisten = true;
    foreach ($charBuscarArray as $caracter) {
        if (false !== ($index = array_search($caracter, $strPrincipalArray,true))) {
            unset($strPrincipalArray[$index]);
        }else{
            $flagExisten = false;
            break;
        }
    }

    return $flagExisten;
}


echo noIterate(["ahffaksfajeeubsne", "jefaa"]);
echo "<br>";
echo noIterate(["aaffhkksemckelloe", "fhea"]);
echo "<br>";
echo noIterate(["aaabaaddae","aed"]);
echo "<br>";
echo noIterate(["aabdccdbcacd", "aad"]);
