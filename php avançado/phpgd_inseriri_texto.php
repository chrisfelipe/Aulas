<?php
    $imagen = "img teste.png";
    list($largura_original,$altura_original) = getimagesize($imagen);
    list($largura_min,$altura_mini)= getimagesize("mini.png");
    $imagen_final = imagecreatetruecolor($largura_original,$altura_original);//sempre vem a largura dps a altura e o x vem antes do y 
    $imagen_original = imagecreatefrompng("img teste.png");
    $imagen_mini = imagecreatefrompng("mini.png");
    

    imagecopy($imagen_final,$imagen_original,0,0,0,0,$largura_original,$altura_original);

    imagecopy($imagen_final,$imagen_mini,5,5,5,0,$largura_min,$altura_mini);
    header("content-Type:image/png");

    imagepng($imagen_original,null);



?>