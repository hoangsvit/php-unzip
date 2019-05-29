<?php
    $zip = new ZipArchive;
    if ($zip->open('htdocs.zip') === TRUE) { // File to extract
    $zip->extractTo('/home/u815960872/public_html/'); // File path
    $zip->close();
    echo 'Extract is complete';
}
?>
