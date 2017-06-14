<?php


include 'functions.php';

fetch_next_quote();

$my_img = imagecreate( 1000, 100 );                             
$background  = imagecolorallocate( $my_img, 239,   220,   223 );
$text_colour = imagecolorallocate( $my_img, 221, 26, 52 );
imagestring( $my_img, 5, 10, 40, $quote, $text_colour );


imagepng($my_img,"$id.png");
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );
?> 