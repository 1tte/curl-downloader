<?php


function downLoad($dir, $download){
	$fuck = system('curl #PUT YOUR SHIT HERE#' -o dl/'.$download.'');
	echo "Success download ".$download."";
	return $fuck;
}

$dir = readline('Directory mana ? ');
$ambilFile = readline('Filename list : ');
$ambil_file = file_get_contents($ambilFile);
$filename = explode("\n", $ambil_file);
$content = $filename[0];

foreach($filename as $content){
	$dl = downLoad($dir, $content);
	if ($dl == $content) {
		echo "Failed to download".$content."";
	} else {
		echo "Success download ".$content."";
	}
}

?>
