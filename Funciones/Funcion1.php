<?php 
function get_nombre(){
    $numero_aleatorio=rand(1, 5);

    switch ($numero_aleatorio) {
        
        case 1:
            echo "Juan";
            break;

        case 2:
            echo "Alejandro";
            break;

        case 3:
            echo "Sebastian";
            break;

        default:
            echo "No hay nombres";
    }
}

get_nombre();

for ($i=0; $i < 20; $i++) { 
    get_nombre();
}