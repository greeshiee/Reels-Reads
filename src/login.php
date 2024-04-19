<?php 

   include 'connect.php';

    if(isset($_POST['logIn'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql = "SELECT * FROM USER_INFO WHERE email='$email' AND pass='$password'";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['email']=$row['Email'];
            header("Location: home.html");
            exit();
        }
        else{
            echo "Account not found!";
        }
    }
?>