<?php 

   include 'connect.php';

    if(isset($_POST['UpdateType'])){
        session_start();
        $uid = $_SESSION['id'];
        $mediaID = $_POST["MediaID"];
        $status = $_POST["UpdateType"];
        if (strcmp($status, "In Progress")==0)  $status = 1;
        elseif (strcmp($status, "Finished")==0) $status = 2;
        else                                    $status = 3;
        if ($status!=3) {
            $sql = "
            UPDATE USER_PREFERENCES
            SET CompletionStatus = $status
            WHERE MediaID='$mediaID' AND UserID='$uid';
            ";
        }
        else {
            $sql = "
            DELETE FROM USER_PREFERENCES
            WHERE MediaID='$mediaID' AND UserID='$uid';
            ";
        }
        $conn->query($sql);
        header("Location: profile.php");
    }
?>