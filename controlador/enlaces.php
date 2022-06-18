<?php 

class EnlacesContontroller
{
    public function enlacesController()
    {
        # muestra el enlace segun la URL
    
        if (isset($_GET['enlace']))
        {
            $link = $_GET['enlace'];
        }
        else
        {
             $link = "index";
        }

        $respuesta = EnlacesModel::enlaceModel($link);

        // var_dump($respuesta);

        include $respuesta;

    }
}