<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form reistration</title>
    <style type="text/css">
        .errorMsg {
            border: 1px solid red;
        }

        .message {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<?php
if (isset($_POST['sbm'])) {

    $emp_name = trim($_POST['name']);
    $emp_contact = trim($_POST['contact']);
    $emp_email = trim($_POST['email']);

    if ($emp_name == "") {
        $errorMsg = "Error : You did not enter a name";
        $code = "1";
    } elseif ($emp_contact == "") {
        $errorMsg = "Error : Please enter number";
        $code = "2";
    }
    //check number
    elseif (is_numeric($emp_contact) == false) {
        $errorMsg = "Error: Please enter numeric value";
        $code = "2";
    } elseif (strlen($emp_contact) != 10) {
        $errorMsg = "Error: Number should be ten digits";
        $code = "2";
    }
    //check email
    elseif ($emp_email == "") {
        $errorMsg = "Error: Please Enter email";
        $code = "3";
    } //check email valid
    elseif (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $emp_email)) {
        $errorMsg = "Error: You did not enter a value email";
        $code = "3";
    } else {
        echo "Success";
    }
}
?>

<body>
    <?php
    if (isset($errorMsg)) {
        echo "<p class='message'>" . $errorMsg . "</p>";
    }
    ?>
    <form action="" method="post" name="registration">
        <table width="400" align="center" cellpadding="4" cellsapaces="1">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php if (isset($name)) {
                                                                echo $name;
                                                            } ?>" <?php if (isset($code) && $code == 1) {
                                                                        echo "class=errorMsg";
                                                                    } ?>></td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td><input type="text" name="contact" value="<?php if (isset($number)) {
                                                                    echo $number;
                                                                } ?>" <?php if (isset($code) && $code == 2) {
                                                                            echo "class=errorMsg";
                                                                        } ?>></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php if (isset($email)) {
                                                                echo $email;
                                                            } ?>" <?php if (isset($code) && $code == 3) {
                                                                        echo "class=errorMsg";
                                                                    }         ?>></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="sbm" value="Sent"></td>
            </tr>
        </table>
    </form>
</body>

</html>