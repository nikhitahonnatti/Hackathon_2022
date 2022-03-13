<?php 
session_start();
require('connect.php');
if(empty($_SESSION["is_logged_in"]) || !$_SESSION["is_logged_in"]){
  header("Location: login.php");
}
$email = $_SESSION["user_email"];
$query = "SELECT * FROM users WHERE email='$email'";
$query_exec = mysqli_query($connection, $query);
$data = mysqli_fetch_array($query_exec, MYSQLI_ASSOC);
$first_name = $data["first_name"];
?>
<h1>Welcome <?php echo $first_name; ?>
</h1>

<a href="logout.php">Logout from the site</a>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Student</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #3c3c3c;
  padding: 30px;
  text-align: center;
  font-size: 10px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 23%;
  height: 500px; /* only for demonstration, should be removed */
  background: #f0f0f0;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: white;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #3c3c3c;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>

<header>
  <h2>Welcome to She Codes Portal</h2>
</header>

<section>
  <nav>
    <ul>
	<a href="landing_page.php">
	<button type="button" class="btn btn-success" style="width:280px;height:55px;margin-bottom:4px"><b>Home</b></button>
	</a>
	<a href="html_quiz.php">
	<button type="button" class="btn btn-success" style="width:280px;height:55px;margin-bottom:4px"><b>Play HTML Quiz 1</b></button>
	</a>
	<a href="html_quiz2.php">
	<button type="button" class="btn btn-success" style="width:280px;height:55px;margin-bottom:4px"><b>Play HTML Quiz 2</b></button>
	</a>
	<a href="css_quiz1.php">
	<button type="button" class="btn btn-success" style="width:280px;height:55px;margin-bottom:4px"><b>Play CSS Quiz 1</b></button>
	</a>
	<a href="css_quiz2.php">
	<button type="button" class="btn btn-success" style="width:280px;height:55px;margin-bottom:4px"><b>Play CSS Quiz 2</b></button>
	</a>
	<a href="js_quiz1.php">
	<button type="button" class="btn btn-success" style="width:280px;height:55px;margin-bottom:4px"><b>Play Javascript Quiz 1</b></button>
	</a>
	<a href="js_quiz2.php">
	<button type="button" class="btn btn-success" style="width:280px;height:55px;margin-bottom:4px"><b>Play Javascript Quiz 2</b></button>
	</a>
	
    </ul>
  </nav>
  
  <article>
  <div class="card-group">
  <div class="card">
    <img src="images\htmlimg.png" class="card-img-top" alt="...">
    <div class="card-body" style="height:300px;">
      <h5 class="card-title">HTML</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <a href="students.php" class="btn btn-primary">Lets Play</a>
	  <a href="enroll_html.php" class="btn btn-warning">Enroll now</a>
    </div>
  </div>
  <div class="card">
    <img src="images\css.png" class="card-img-top" style="height:380px" alt="...">
    <div class="card-body">
      <h5 class="card-title">CSS</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
	
	
      <a href="css_video.php" class="btn btn-primary">Lets Play</a>
	<a href="enroll_css.php" class="btn btn-warning">Enroll now</a>
	
	
    </div>
  </div>
  <div class="card">
    <img src="images\js1.jpg" class="card-img-top" style="height:300px; width:270px; align:center; margin-left:18px; margin-top: 25px;" alt="...">
    <div class="card-body">
      <h5 class="card-title">Java Script</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
	  
	
	
      <a href="js_video.php" class="btn btn-primary">Lets Play</a>
	<a href="enroll_js.php" class="btn btn-warning">Enroll now</a>
	
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
  <!--<a href="students.php">
    <button type="button" class="btn btn-primary btn-lg" style="margin-right:120px;height:60px">Students</button>
	</a>-->
	<!--<div class="e-card e-card-horizontal" style="width: 18rem;">
  <img src="images\htmlimg.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HTML</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="students.php" class="btn btn-primary">Lets Play</a>
	<a href="#" class="btn btn-warning">Enroll now</a>
  </div>
</div>-->
	<!--<a href="display_student_marks.php">
	<button type="button" class="btn btn-danger btn-lg" style="margin-right:120px;height:60px">Display marks</button>
	</a>-->
	<!--<div class="e-card e-card-horizontal" style="width: 18rem;">
  <img src="images\cssimg.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CSS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Lets Play</a>
	<a href="#" class="btn btn-warning">Enroll now</a>
  </div>
</div>-->
	<!--<a href="display_courses.php">
	<button type="button" class="btn btn-warning btn-lg" style="margin-right:120px;height:60px">Courses</button>
	</a>-->
	<!--<div class="e-card e-card-horizontal" style="width: 18rem;">
  <img src="images\javascriptimg.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">JS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Lets Play</a>
	<a href="#" class="btn btn-warning">Enroll now</a>
  </div>
</div>-->
	<!--<a href="timetable.php">
	<button type="button" class="btn btn-success btn-lg" style="margin-right:120px;height:60px">Time table</button>
	</a>-->
  </article>
</section>

<!--<footer>
  <p>By using our site, you acknowledge that you have read and understand our Cookie Policy, Privacy Policy, and our Terms of Service.</p>
</footer>-->

</body>
<script src="./script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>
