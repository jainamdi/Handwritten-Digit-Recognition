


<?php

if (($_FILES['my_file']['name']!="")){
// Where the file is going to be stored
    $target_dir = "./";
    $file = $_FILES['my_file']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $ext = $path['extension'];
    $temp_name = $_FILES['my_file']['tmp_name'];
    $path_filename_ext = $target_dir.$filename.".".$ext;
 
// Check if file already exists
if (file_exists($path_filename_ext)) {
    echo "Upload image with different file name..";
 }else{
 move_uploaded_file($temp_name,$path_filename_ext);
 echo "Congratulations! File Uploaded Successfully.";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form name="form" method="post" action="result.php" >
       <input type="submit" name="submit" value="result"/>
    </form>
</body>
</html>
