<?php
include '../config.php';
include '../views/Barber.php';

spl_autoload_register(function ($class)
{
    include '../services/' . $class . '.php';
});







