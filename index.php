<?php

require_once 'config/global.php';

require_once 'core/ControladorBase.php';

require_once 'core/ControladorFrontal.func.php';

if (isset($_GET['controlador']))
{
   $controladorObj = cargarControlador($_GET['controlador']);
}
else
{
   $controladorObj = cargarControlador(CONTROLADOR_DEFECTO);
}
lanzadorAccion($controladorObj);
