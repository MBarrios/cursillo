<?php

function redimensionar($type, $img_original, $img_nueva, $img_nueva_anchura, $img_nueva_altura, $img_nueva_calidad)
{

    $defecto = 'img/defecto.jpg';

    if(file_exists($img_original)) {

        // crear imagen desde original
        $type=strtolower($type);
        switch($type)
        {
            case 'jpeg':    $img = ImageCreateFromJPEG($img_original); break;
            case 'jpg':        $img = ImageCreateFromJPEG($img_original); break;
            case 'png':        $img = ImageCreateFromPNG($img_original); breaK;
            case 'gif':        $img = ImageCreateFromGIF($img_original); breaK;
            case 'wbmp':    $img = ImageCreateFromWBMP($img_original); break;
            default:        $img = ImageCreateFromJPEG($defecto);    break;
        }

    } else {
            $img = ImageCreateFromJPEG($defecto);
    }


    if(!empty($img)) {


            $new_w_R = ImageSX($img);
            $new_h_R = ImageSY($img);

            $img_nueva_altura = 50;


            // se calcula la relación alto/ancho
            $aspect_ratio = $new_h_R/$new_w_R;

            // se ajusta al nuevo tamaño
            $img_nueva_altura = abs($img_nueva_anchura * $aspect_ratio);

            // crear imagen nueva
            $thumb = ImageCreateTrueColor($img_nueva_anchura,$img_nueva_altura);

            // redimensionar imagen original copiandola en la imagen. La imagen se reajustará al nuevo tamaño
            ImageCopyResampled($thumb,$img,0,0,0,0,$img_nueva_anchura,$img_nueva_altura,ImageSX($img),ImageSY($img));

            // guardar la imagen redimensionada donde indica $img_nueva
            ImageJPEG($thumb,$img_nueva,$img_nueva_calidad);
        }


}
?>