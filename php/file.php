<?php
$target_dir = "../uploads/";
$file = '';

if (isset($_FILES['fileToUpload']['name'])) {
  $file = $_FILES['fileToUpload']['name'];
}

$target_file = $target_dir . $file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

function deleteFile($file) {
  if (file_exists($file)) {
    unlink($file);
  }
}

// Check if image file is a actual image or fake image
function validateImage() {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
      return true;
  } else {
      echo "File is not an image.";
      $uploadOk = 0;
      return false;
  }
}

function checkFileExists() {
  // Check if file already exists
  global $target_file;
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
      return false;
  } else {
    return true;
  }
}

function checkFileSize(){
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
      return false;
  } else {
    return true;
  }
}


// Allow certain file formats
function checkFileType() {
  global $imageFileType;
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
      return false;
  } else {
    return true;
  }
}

// Check if $uploadOk is set to 0 by an error
function uploadImage($fileName) {
  global $uploadOk;
  global $target_file;
  global $target_dir;

  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      deleteFile($target_dir . $fileName);
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $fileName)) {
          echo "The file ". $target_dir . $fileName. " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}

 ?>
