<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
</head>
    <?php
        if(isset($_POST['sbm'])) {
            
            $file_name = $_FILES['upload']['name'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $error_file = $_FILES['upload']['error'];

            if($error_file > 0) {
                echo "File error";
            } else {
                move_uploaded_file($file_tmp_name,'upload/' . $file_name);
            }
        }
    ?>
<body>
    <form action="" method="post" name="" enctype="multipart/form-data">
        <input type="file" name="upload">
        <input type="submit" name="sbm" value="upload">
    </form>
</body>
</html> 