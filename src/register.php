<?php 

   include 'connect.php';

    if(isset($_POST['signUp'])){
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmpass'];

        $checkAccount = "SELECT * FROM user_info WHERE email = '$email'";
        $result=$conn->query($checkAccount);
        if($result->num_rows>0){
            echo "Account already exists!";
        }
        else if($password != $confirmPassword){
            echo "Passwords don't match!";
        }
        else{
            $insertAccount = "INSERT INTO user_info(FName, LName, Email, Pass, Username) 
                              VALUES ('$firstName', '$lastName', '$email', '$password', '$username')";

            if ($conn->query($insertAccount) === TRUE) {
                header("location: login.html");
                
            } else {
                echo "Error: " . $insertAccount . "<br>" . $conn->error;
            }
        }
    }
?>