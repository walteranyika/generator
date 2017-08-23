<?php
function generate_cert($name)
{
    $jpg_image = imagecreatefromjpeg('tribe.jpg');
    list($img_width, $img_height, ,) = getimagesize("tribe.jpg");
    $text = $name;
    $white = imagecolorallocate($jpg_image, 255, 255, 255);
    $font = 25;
    $font_path = './cairo.ttf';
    $p = imagettfbbox(25, 0, $font_path, $text);
    $txt_width = $p[2] - $p[0];
    $x = ($img_width - $txt_width) / 2;
    imagettftext($jpg_image, 25, 0, $x, 60, $white, $font_path, $text);
    $img_name =str_replace(" ","_",$name);
    imagejpeg($jpg_image, "images/".$img_name.".jpg");
}

/*generate_cert("John Mark");
generate_cert("Hellen Jane");
generate_cert("Samson Otieno");
generate_cert("Fred Ouma");*/
