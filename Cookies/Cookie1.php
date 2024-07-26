<?php

setcookie(
    "subdomain_cookie",                    //name
    "Esta cookie esta disponible",         //value 
    time() + 60 * 60 * 24,                 //expires or options
    "/",                                   //path
    "localhost",                           //domian
    false,                                 //secure
    true                                   //httponly
);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";

?>