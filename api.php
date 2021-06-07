<?php
    $filename = $_FILES['file']['name'];
    $location = "uploads/".uniqid().$filename;
    $isSuccess = false;
    if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
        $isSuccess = true;
    } 
    echo "{\"isSuccess\": $isSuccess, \"fileName\": \"$location\"}"; 
?>