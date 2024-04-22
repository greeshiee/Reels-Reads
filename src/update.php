<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reads&Reels</title>
    <link rel="stylesheet" href="update.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include 'connect.php';
    session_start();
?>
<div class="update">
    <header class="flex-container">
        <a href="#"><img class="logo" src="../assets/Logo.png" alt="Reels & Reads"></a>
        <div class="right-side">
            <div class="search-container">
                <a href="#">
                    <svg class="search-icon" width="21" height="21" viewBox="0 0 21 21" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M20.7636 19.6219L15.7139 14.5732C17.1775 12.8161 17.9073 10.5623 17.7515 8.28081C17.5958 5.99928 16.5664 3.86562 14.8776 2.32371C13.1887 0.781797 10.9704 -0.0496625 8.68419 0.00229642C6.39793 0.0542554 4.21972 0.985633 2.60268 2.60268C0.985633 4.21972 0.0542554 6.39793 0.00229642 8.68419C-0.0496625 10.9704 0.781797 13.1887 2.32371 14.8776C3.86562 16.5664 5.99928 17.5958 8.28081 17.7515C10.5623 17.9073 12.8161 17.1775 14.5732 15.7139L19.6219 20.7636C19.6969 20.8385 19.7859 20.898 19.8838 20.9385C19.9817 20.9791 20.0867 21 20.1927 21C20.2987 21 20.4037 20.9791 20.5017 20.9385C20.5996 20.898 20.6886 20.8385 20.7636 20.7636C20.8385 20.6886 20.898 20.5996 20.9385 20.5017C20.9791 20.4037 21 20.2987 21 20.1927C21 20.0867 20.9791 19.9817 20.9385 19.8838C20.898 19.7859 20.8385 19.6969 20.7636 19.6219ZM1.63593 8.89729C1.63593 7.46112 2.0618 6.05721 2.85969 4.86309C3.65757 3.66897 4.79164 2.73826 6.11848 2.18866C7.44532 1.63907 8.90534 1.49527 10.3139 1.77545C11.7225 2.05563 13.0163 2.74721 14.0318 3.76273C15.0474 4.77825 15.7389 6.0721 16.0191 7.48067C16.2993 8.88923 16.1555 10.3492 15.6059 11.6761C15.0563 13.0029 14.1256 14.137 12.9315 14.9349C11.7374 15.7328 10.3334 16.1586 8.89729 16.1586C6.97211 16.1565 5.12639 15.3908 3.76509 14.0295C2.40378 12.6682 1.63806 10.8225 1.63593 8.89729Z"
                                fill="black" />
                    </svg>
                </a>
                <input class="search-text-box" type="text" placeholder="Search...">
            </div>
            <img class="user-icon" src="../assets/user-circle.svg">
        </div>
    </header>

    <div class="image-container">
        <img class = "image" src = "../assets/image.png">
    </div>

    <div class="update-form">
        <p class="update">Update Profile</p>
        <form action="updateForm.php" method="POST" class="form">
            <?php
            // Assuming you have established a database connection already and stored it in $conn

            // Retrieve the fName, lName, and username from the database for a specific user
            $id = $_SESSION['id']; // Assuming you have the user's ID in session

            // Perform a SELECT query
            $selectQuery = "SELECT FName, LName, username FROM USER_INFO WHERE ID = '$id'";
            $result = $conn->query($selectQuery);

            // Initialize variables for storing values
            $fName = "";
            $lName = "";
            $username = "";

            // Check if the query executed successfully and returned a row
            if ($result && $result->num_rows > 0) {
                // Fetch the row
                $row = $result->fetch_assoc();

                // Extract the fName, lName, and username values
                $fName = $row['FName'];
                $lName = $row['LName'];
                $username = $row['username'];
            }

            // Output the input fields with the retrieved values
            ?>
            <div class="name-container">
                <input class="fName" value="<?php echo $fName; ?>" name="fName">
                <input class="lName" value="<?php echo $lName; ?>" name="lName">
            </div>
            <input class="username" value="<?php echo $username; ?>" name="username">
            <input class="update-button" type="submit" value="Update" name="updateProfile">
        </form>
    </div>


</div>

</body>
</html>