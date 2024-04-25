<?php

    include 'connect.php';

    if(isset($_POST['addMedia'])) {
        session_start();

        $UserID = $_SESSION['id'];
        $mediaType = $_POST['type-selector'];
        $Title = $_POST['title-input'];
        $devName = $_POST['dev-input'];
        $Rating = $_POST['rating'];
        $progOpt = $_POST['options'];

        if(strcasecmp($progOpt, "in-progress") == 0) {
            $CompletionStatus = 1;
        }
        else if(strcasecmp($progOpt, "finished") == 0) {
            $CompletionStatus = 2;
        }



        if(strcasecmp($mediaType, "book") == 0) {
            $MediaIDsql = "SELECT m.ID FROM MEDIA m JOIN BOOKS b ON m.ID = b.ISBN WHERE m.Title = ? AND b.Author = ?";
        }
        else if(strcasecmp($mediaType, "movie") == 0) {
            $MediaIDsql = "SELECT m.ID FROM MEDIA m JOIN MOVIES movie ON movie.MID = movie.MID WHERE m.Title = ? AND movie.Director = ?";
        }

        if($MediaStmt = $conn->prepare($MediaIDsql)) {
            $MediaStmt->bind_param("ss", $Title, $devName);
            $MediaStmt->execute();
            $MediaStmt->bind_result($MediaID);
            $MediaStmt->fetch();
            $MediaStmt->close();
        }

       


        //INSERT INTO USER_PREFERENCES (UserID, MediaID, Rating, CompletionStatus)
        $ADDstmt = $conn->prepare("INSERT INTO USER_PREFERENCES (UserID, MediaID, Rating, CompletionStatus) VALUES (?, ?, ?, ?)");

        $ADDstmt->bind_param("isii", $UserID, $MediaID, $Rating, $CompletionStatus);
        $ADDstmt->execute();
        $ADDstmt->close();
        header("Location: profile.php");

    }
?>