
<!DOCTYPE html>
<html>
<body>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileup"]["name"]);
if(isset($_FILES["fileup"])) {
if (move_uploaded_file($_FILES["fileup"]["tmp_name"],$target_file)){
echo "The file ". basename( $_FILES["fileup"]["name"]). " is uploaded successfully.";
} 
else {
echo "Error while uploading your file."; 
}
}else{
echo "File not available"; 
}
?>
</body>
	 