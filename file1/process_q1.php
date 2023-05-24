<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";
$file_name=date('y-m-d-h-m').$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$file_name))
{
    echo"Uploaded.";
}
else{
    echo"Not Uploaded.";
}
?>