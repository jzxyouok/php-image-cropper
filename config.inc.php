<?php
/**
 * Created by PhpStorm.
 * User: Olaf
 * Date: 25.10.2014
 * Time: 09:46
 */

session_start();

$cropperToUse = 'cropper_w_preview.php';

$show_w = 600;

$aspectRatio = 1.666666666666;
$targ_w = 250;
$targ_h = $targ_w/$aspectRatio;
$jpeg_quality = 85;
$folder = 'testimages/';
$appendToFilename = '_cropped';