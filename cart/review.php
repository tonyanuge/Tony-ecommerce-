<?php

$hostname = "localhost";
$username = "review_site";
$password = "JxSLRkdutW";
$db = "reviews";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
  $reviewer_name=$_POST['reviewer_name'];
  $star_rating=$_POST['star_rating'];
  $details=$_POST['details'];

  $query = "INSERT INTO user_review (reviewer_name, star_rating, details)
  VALUES ('$reviewer_name', '$star_rating', '$details')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      echo "Thanks for your comments.";
    }

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>

            <div class="content-wrapper">
                <h1>Customer Review</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=products">Products</a>
			<a href="logout.php">Logout</a>
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
						
					</a>
                </div>
            </div>
        </header> 
        <main>
<script src="https://use.fontawesome.com/a6f0361695.js"></script>

<h2 id="fh2">WE APPRECIATE YOUR COMMENTS!</h2>

<p>Let us know how we're doing!</p>

  <form action="addreview.php" method="POST">

      Your name: <input type="text" name="reviewer_name"><br><br>

      How many stars would you give us? 
        <select name="star_rating">
          <option value="1">1 star</option>
          <option value="2">2 stars</option>
          <option value="3">3 stars</option>
          <option value="4">4 stars</option>
          <option value="5">5 stars</option>
        </select><br><br>

      Your comments: <br>
        <textarea name="details" rows="10" cols="30"></textarea><br><br>

      <input type="submit" value="Submit" name="submit">

  </form>

</main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; 2021, DT255/C18731921</p>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
