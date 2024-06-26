<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/addMedia.css">
  <title>Add to Profile</title>
</head>

<body>
<header class="flex-container">
    <a href="home.php"><img class="logo" src="../assets/Logo.png" alt="Reels & Reads"></a>
    <div class="right-side">
        <div class="search-container">
            <a href="#" onclick="redirectSearch()">
                <svg class="search-icon" width="21" height="21" viewBox="0 0 21 21" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M20.7636 19.6219L15.7139 14.5732C17.1775 12.8161 17.9073 10.5623 17.7515 8.28081C17.5958 5.99928 16.5664 3.86562 14.8776 2.32371C13.1887 0.781797 10.9704 -0.0496625 8.68419 0.00229642C6.39793 0.0542554 4.21972 0.985633 2.60268 2.60268C0.985633 4.21972 0.0542554 6.39793 0.00229642 8.68419C-0.0496625 10.9704 0.781797 13.1887 2.32371 14.8776C3.86562 16.5664 5.99928 17.5958 8.28081 17.7515C10.5623 17.9073 12.8161 17.1775 14.5732 15.7139L19.6219 20.7636C19.6969 20.8385 19.7859 20.898 19.8838 20.9385C19.9817 20.9791 20.0867 21 20.1927 21C20.2987 21 20.4037 20.9791 20.5017 20.9385C20.5996 20.898 20.6886 20.8385 20.7636 20.7636C20.8385 20.6886 20.898 20.5996 20.9385 20.5017C20.9791 20.4037 21 20.2987 21 20.1927C21 20.0867 20.9791 19.9817 20.9385 19.8838C20.898 19.7859 20.8385 19.6969 20.7636 19.6219ZM1.63593 8.89729C1.63593 7.46112 2.0618 6.05721 2.85969 4.86309C3.65757 3.66897 4.79164 2.73826 6.11848 2.18866C7.44532 1.63907 8.90534 1.49527 10.3139 1.77545C11.7225 2.05563 13.0163 2.74721 14.0318 3.76273C15.0474 4.77825 15.7389 6.0721 16.0191 7.48067C16.2993 8.88923 16.1555 10.3492 15.6059 11.6761C15.0563 13.0029 14.1256 14.137 12.9315 14.9349C11.7374 15.7328 10.3334 16.1586 8.89729 16.1586C6.97211 16.1565 5.12639 15.3908 3.76509 14.0295C2.40378 12.6682 1.63806 10.8225 1.63593 8.89729Z"
                            fill="black" />
                </svg>
            </a>
            <input id="search-input" class="search-text-box" type="text" placeholder="Search...">
        </div>

        <script>
            function redirectSearch() {
                var input = document.getElementById('search-input').value;
                window.location.href = 'search.php?Title=' + input;
            }
        </script>

        <a href="profile.php">
            <img class="user-icon" src="../assets/user-circle.svg">
        </a>
    </div>
</header>
  <div class="container">
    <div class="add-media-heading">Add Media To Profile</div>
    <form method="POST" action="insertMedia.php">
      <?php
        include 'connect.php';
        session_start();

      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM MEDIA WHERE ID='$id'";
        $result = $conn->query($sql);

        $row=$result->fetch_assoc();
        $title = $row['Title'];

        echo "<div class=\"input-container\">
        <input class=\"title-input\" type=\"text\" value='$title' name=\"title-input\" readonly> 
      </div>";

        $sql2 = "SELECT * FROM BOOKS WHERE ISBN='$id'";
        $result2 = $conn->query($sql2);
        if($result2->num_rows > 0){
            $row2 = $result2->fetch_assoc();
            $author = $row2['Author'];
            echo "<div class=\"input-container\">
        <input class=\"dev-input\" type=\"text\" value='$author' name=\"dev-input\" readonly>
      </div>";

            echo "<select class=\"type-selector\" name=\"type-selector\" readonly>
        <option value=\"book\">Book</option>
      </select>";
        }
        else
        {
            $sql2 = "SELECT * FROM MOVIES WHERE MID='$id'";
            $result2 = $conn->query($sql2);

            $row2 = $result2->fetch_assoc();
            $author = $row2['Director'];
            echo "<div class=\"input-container\">
        <input class=\"dev-input\" type=\"text\" value='$author' name=\"dev-input\" readonly>
      </div>";
            echo "<select class=\"type-selector\" name=\"type-selector\" readonly>
        <option value=\"movie\">Movie</option>
      </select>";
        }
      }
      ?>


      <div class="media-type-selector">
        <input type="radio" id="in-progress" name="options" value="in-progress">
        <label for="option1">In progress</label><br>

        <input type="radio" id="finished" name="options" value="finished">
        <label for="option2">Finished</label><br>
      </div>
      <div>
        <select class="rating-selector" name="rating">
          <option selected disabled>Rating</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <button class="add-button" type="submit" name="addMedia">
        Add
      </button>
    </form> 
  </div>
</body>

</html>
