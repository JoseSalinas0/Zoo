<?php

$controlador="AdminController";
$action="inicio";

require_once("Controller/".$controlador.".php");
$ctr=new $controlador;
$ctr->{$action}()
?>