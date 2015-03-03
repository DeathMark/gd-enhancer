<?php
include '../src/gdenhancer/GDEnhancer.php';

$image	= new GDEnhancer('pokemon.gif');
$image->layerImage('windows.png');
$image->layerImageResize(0, 100, 100);
$image->layerMove(0, 'bottomright', -20, -20);
$image->layerText('What does the dragon say?', 'arial.ttf', '10', '#000');
$image->layerMove(1, 'topleft', 20, 20);

$image->saveTo('mixed');