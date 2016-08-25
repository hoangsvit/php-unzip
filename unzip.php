<?php
	$zip = new ZipArchive;
if ($zip->open('htdocs.zip') === TRUE) { // File cần giải nén
    $zip->extractTo('/home/u815960872/public_html/'); // Đường dẫn file
    $zip->close();
    echo 'Giải nén hoàn tất';
}
?>
