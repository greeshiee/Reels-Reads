<?php 

   include 'connect.php';
   session_start();

    if(isset($_POST['updateProfile'])){
        $fName=$_POST['fName'];
        $lName=$_POST['lName'];
        $username=$_POST['username'];
        $id = $_SESSION['id'];

        $sql = "SELECT * FROM USER_INFO WHERE username='$username' AND ID != $id";
        $result = $conn->query($sql);
        if($result->num_rows>0) {

            echo "Username taken, Try again.";
        }
        else{
            $updateUser = "UPDATE USER_INFO SET username = '$username', FName = '$fName', LName = '$lName' WHERE ID = '$id'";
            $conn->query($updateUser);
            header("Location: profile.php");

        }
    }
?>