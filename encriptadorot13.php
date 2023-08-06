<?php
function rot_13char($char){
    //$char -> nuestro mensaje
    //mayusculas
    //[A,B,C,D,....Z]
    $upperCase = range('A','Z');
    $lowerCase = range('a','z');
    //26
    if (in_array($char,$upperCase)){
        $index = (array_search($char,
            $upperCase) -13 + 26) % 26;
        return $upperCase[$index];
    }else if(in_array($char, $lowerCase
        )){
        $index = (array_search($char,
        $lowerCase) -13 + 26) %26;
        return $lowerCase[$index];

    } else{
        return $char;
    }
}

function rot13($muchoTexto){
    //nuestro mensaje completo
    $encriptado = "";
    //cuantos caracteres tieme el mensaje
    $longitud = strlen($muchoTexto);
    //hola -> 4
    for($i=0; $i < $longitud ; $i++){
        $char = $muchoTexto[$i];
        $encriptado .= $rot_13char(
            $char);
    }
    return $encriptado;
}
$miMesaje ='cualquier cosa';
$miMesajeEncriptado = rot13($miMesaje);
$miMensajeDesencriptado = rot13Desencriptado(
    $miMensajeDesencriptado);
echo $miMesajeEncriptado;

?>