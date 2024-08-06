<?php



$target_dir = "uploads/";


$target_file = $target_dir . basename($_FILES["photo"]["name"]);

if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    echo "File " . basename($_FILES["photo"]["name"]) . " success.";
} else {
    echo "Error";
}




//if ($_FILES["photo"]["size"] > 5000000) {
//    echo "Error: File size  the 5MB limit.";
//    exit;
//}
////
////
//if (file_exists($target_file)) {
//    echo "Error: File already exists.";
//    exit;
//}