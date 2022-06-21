<!-- edited data update here  -->
<?php
    require_once "dbConnect.php";
    $id = $_POST['id'];
    $name = $_POST['student_name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phoneNumber'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $sql = "UPDATE students SET student_name=\"$name\", email=\"$email\", phoneNumber=\"$phonenumber\", standard=\"$class\", address=\"$address\" WHERE id=$id";  
    if(mysqli_query($con, $sql)) {  
        $msg_success = "new password updated successfully";
        echo $msg_success;
        // $message = urlencode("registration success");
        $update_message = urldecode("update success");
        header("Location:studentsList.php?update_message=".$update_message);  
    } else {  
    echo "Could not update record: ". mysqli_error($con);  
    }  
?>