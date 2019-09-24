<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>

<?php
    if(isset($_POST['sbm'])) {
        $_SESSION['name'] = $_POST['username'];
    }
    if(isset($_SESSION['name'])) {
        echo "Tên đăng nhập là:" . $_SESSION['name'];
    }
?>
<body>
    <form action = "" method = "post">
        <input type="text" name="username"/><br>
        <input type="submit" name="sbm" value="Save Session" >
    </form>
</body>
</html>