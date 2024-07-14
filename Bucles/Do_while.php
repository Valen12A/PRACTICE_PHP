<?php

$users = ["Julian", "Pedro"];

do{
    $user= readline("Ingrese su nombre: ");

} while( in_array($user, $users) );