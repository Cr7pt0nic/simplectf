<?php
// an array of disallowed extensions and allowed magic numbers
$disallowedExts = array("php", "php3", "php4", "php5", "phtml", "pl", "asp", "aspx", "html", "htm", "js", "pdf");
$allowedMagicNumbers = array(
    "FFD8FFE0", // JPEG
    "FFD8FFE1", // JPEG
    "89504E47", // PNG
    "47494638"  // GIF
);

$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

// check if the file is an image and the extension is not disallowed
if (!in_array($extension, $disallowedExts) &&
    in_array(
        strtoupper(bin2hex(file_get_contents($_FILES["file"]["tmp_name"], false, null, 0, 4))),
        $allowedMagicNumbers
    )
) {
    if ($_FILES["file"]["error"] > 0) {
        echo "0";
    } else {
        $target = "uploads/";
        $filename = uniqid() . '.' . $extension;
        move_uploaded_file($_FILES["file"]["tmp_name"], $target . $filename);
        echo  $target . $filename;
    }
} else {
    echo "Filetype or extension not allowed";
}
