<?php
    $filename = "img teste.png";
    $width = 200;
    $height= 200;
    list($largura_original,$altura_original)=getimagesize($filename);
    $ratio = $largura_original/$altura_original;
    
    if($width/$height > $ratio){
        $width = $height * $ratio;
    }else{
        $height = $width / $ratio;
    }
    $image_final = imagecreatetruecolor($width,$height);

    $img_original = imagecreatefrompng($filename);

    imagecopyresampled($image_final,$img_original,0,0,0,0,$width,$height,$largura_original,$altura_original);
   
    imagepng($image_final, "mini.png");
    echo "Imagen redimensionado e salva";
    


?>