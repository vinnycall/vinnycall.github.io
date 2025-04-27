<?php

function getImagesFromFolder($folder = 'images/'){
    $images = [];
    $files = scandir($folder);

    foreach($files as $file){
        if($file !== '.' && $file !== '..'){
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

            if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'] )){
                $images[] = $folder . $file;
            }
        }
    }
    return $images;
}