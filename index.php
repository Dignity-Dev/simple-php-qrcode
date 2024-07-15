<?php
include "./phpqrcode-master/qrlib.php";
//set it to writable location, a place for temp generated PNG files
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

//html PNG location prefix
$PNG_WEB_DIR = 'temp/';

//ofcourse we need rights to create temp dir
if (!file_exists($PNG_TEMP_DIR))
    mkdir($PNG_TEMP_DIR);

// Filename
$filename = $PNG_TEMP_DIR.'test.png';

// QR Code Value
$data = "Your QR Code Value";

// Call Function QR Code
QRcode::png($data, $filename, "H", 6, 2);
 ?>

 <img src="<?php echo $PNG_WEB_DIR.basename($filename) ?>" class="mb-4"/>
