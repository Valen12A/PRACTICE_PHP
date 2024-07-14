<?php

//Manipulación de arreglos
 $edades =[18, 20, 15, 32];
  
  //VAR_DUMP
    var_dump($edades);
    
    
  //COUNT
    echo count ($edades);
  
  
  //ARRAY_PUSH
    array_push ($edades, 13);
  
  
  //IS_ARRAY
    var_dump(is_array ($edades));
  
  
  //EXPLOTE
    $list_fruit ="fresa, mandarina, manzana, banano";
    $array_fruit =explode (",", $list_fruit);
  
  
  //IMPLODE
    $array_fruit =["fresa", "mandarina", "manzana", "banano"];
    $list_fruit = implode(",", $array_fruit);


?>