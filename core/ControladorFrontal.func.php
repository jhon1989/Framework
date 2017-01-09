<?php

function cargarControlador($controlador)
{
   $controlador       = ucwords($controlador) . 'Controller';
   $strFileController =  'controller/' . $controlador . '.php';

   if (!is_file($strFileController))
   {
      $strFileController = 'controller' . ucwords(CONTROLADOR_DEFECTO) . 'Controller.php';
   }

   require_once $strFileController;
   $controllerObj = new $controlador();
   return $controllerObj;

}

function cargarAccion($controllerObj, $action)
{
   $accion = $action;
   $controllerObj->$accion();
}

function lanzadorAccion($controllerObj)
{
   if (isset($_GET['action']) && method_exists($controllerObj, $_GET['action']))
   {
      cargarAccion($controllerObj, $_GET['action']);
   }
   else
   {
     cargarAccion($controllerObj, ACCION_DEFECTO);
   }
}
