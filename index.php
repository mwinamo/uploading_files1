<?php
// IF THE FORM IS SUBMITTED & FOUND THE REQUESTED FILE -
if(isset($_POST['submitUpload']) && isset($_FILES['targetFile'])){

    //FILE UPLOADING CODE GOES HERE

    echo "<pre>";

    // SHOWING THE DETAILS OF THE FILE GOING TO BE UPLOADED
    var_dump($_FILES['targetFile']);

    echo "</pre>";

    //It will stop the execution of the following code.
    exit;

}
?>
<!DOCTYPE html>
<html>
<body>

<form action="./index.php" method="POST" enctype="multipart/form-data">
    <label for="myFile"><b>Select file to upload:</b></label><br>
    <input type="file" name="targetFile" id="myFile">
    <input type="submit" name="submitUpload" value="Upload">
</form>

</body>
</html>
