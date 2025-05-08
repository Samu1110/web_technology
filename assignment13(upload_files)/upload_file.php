<?php

$targetDir = "uploads/";


if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}


$file = $_FILES['uploadedFile'];
$fileName = basename($file["name"]);
$targetFile = $targetDir . $fileName;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
$fileSize = $file["size"];
$tmpName  = $file["tmp_name"];
$allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx', 'txt', 'mp4', 'zip'];


if (!in_array($fileType, $allowedTypes)) {
    echo " File type not allowed.";
    exit;
}


if ($fileSize > 10 * 1024 * 1024) {
    echo " File is too large. Max 10MB allowed.";
    exit;
}


if (move_uploaded_file($tmpName, $targetFile)) {
    echo " File uploaded successfully: " . htmlspecialchars($fileName);
} else {
    echo " Failed to upload the file.";
}
?>
