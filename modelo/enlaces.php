<?php

//clase modelo para los enlaces

class EnlacesModel
{
    public static function enlaceModel($linkModel)
    {
        //lista valida de urls

        if (
            $linkModel == "articulos" ||
            $linkModel == "dashboard" ||
            $linkModel == "ingresar" ||
            $linkModel == "registrar" ||
            $linkModel == "usuarios" ||
            $linkModel == "salir"
        ) 
        {
            //agregamos la repuesta 
            $modulo = "vista/modulos/".$linkModel.".php";
        }
        else
        {
            $modulo = "vista/modulos/ingresar.php";
        }

        return $modulo;

    }
}
