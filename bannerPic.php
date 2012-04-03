<?php
// Resizes image so it is no taller than maxHeight
$img_folder = '/data/vhost/www.no2id.net/docs/images/pledge-photos/';

$photo = $_GET['image'];
$maxHeight = $_GET['maxHeight'];

$image = ImageCreateFromJPEG($img_folder . $photo);
$dst = resizeImage($image,$maxHeight);
header('Content-Type: image/jpeg');
ImageJPEG($dst);

function resizeImage($image,$maxHeight) {
		
		$width = ImageSx($image);
		$height = ImageSy($image);
		
		if ($height > $maxHeight) {
			$ratio = $maxHeight/$height;
			$x = $width*$ratio;
			$y = $maxHeight;
		} else {
			$x = $width;
			$y = $height;
		}
		$dst = ImageCreate($x,$y);
		ImageCopyResized($dst,$image,0,0,0,0,$x,$y,$width,$height);
		return $dst;
}
?>
