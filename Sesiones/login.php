<?php

session_start();

$users = [
    array(
        "username" => "Juan",
        "email"=> "juan@gmail.com",
    ),

    array(
        "username"=> "Jose",    
        "email"=> "jose@gmail.com",
    )
];

$user = $_GET["user"] ?? "";

// echo "el usuario es: " . $users[$user]["username"];

$_SESSION ["id"]  = $user;
$_SESSION ["username"] =  $users[$user]["username"];
$_SESSION ["email"] = $users[$user]["email"];