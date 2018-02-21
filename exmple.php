<?php
require_once 'classes/Image.php';
$img = new Image;

//$img->SetHeaders();

/*
//image resize
$size =  $img->ImageResize(
	[
		'source' => 'img/umer.png',
		'w' => 100,
		'h' => 150,
		'save' => true,
		'target' => 'img/resize1.png'		
	]);
*/

/*
//image brightness	
$size =  $img->ImageBrightness(
	[
		'source' => 'img/umer.png',
		'brightness' => 120,
		//optional parameters		
		'save' => true,
		'target' => 'img/bright.png'
	]);
*/

/*
//image effects	
$size =  $img->ImageEffects(
	[
		'source' => 'img/umer.png',
		'effect' => 'green_night',
		'opacity' => 30,
		//optional parameters		
		//'save' => true,
		//'target' => 'img/effets_green_night.png'
	]);	
*/



/*
//image blur	
$size =  $img->ImageBlur(
	[
		'source' => 'img/umer.png',
		'blur_opacity' => 100,
		//optional parameters
		'save' => true,
		'target' => 'img/blur.png'
	]);		
*/

/*
//crop image
$size =  $img->ImageCrop(
	[
		'source' => 'img/umer.png',
		'x' => 100,
		'y' => 150,
		//optional parameters
		'save' => true,
		'target' => 'img/crop.png'
]);	
*/

/*
//flip
$size =  $img->ImageFlip(
	[
		'source' => 'img/umer.png',
		'flip' => 'horizontal',
		//optional parameters
		'save' => true,
		'target' => 'img/flip_hori.png'
]);	
*/

/*
//Image rotate
$size =  $img->ImageRotate(
	[
		'source' => 'img/umer.png',
		//rotate in degree
		'rotate' => 150,

		//if you want provide color of the uncovered zone after the rotation
		'bg_color' => 
		[
			'red' => 14,
			'green' => 255,
			'blue' => 140,
		],

		//optional parameters
		'save' => true,
		'target' => 'img/rotate1.png'
]);	
*/

/*
//image border
$size =  $img->ImageBorder(
	[
		'source' => 'img/umer.png',
		'thickness' => 10,
		'bg_color' => 
		[
			'red' => 14,
			'green' => 255,
			'blue' => 140,
		],		
		//optional parameters
		'save' => true,
		'target' => 'img/border.png'
]);	
*/
echo $img->ImageDate('img/umer.png');	
