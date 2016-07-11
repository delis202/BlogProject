<?php
/*$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

session_start();
if( $_POST["title"] == "admin" && $_POST["password"] == "option123") {
    //admin/option123
  $_SESSION['admin'] = true;
  header('Location: /adminpanel.php');  
}
else {
    header('Location: /adminka.php');
}*/

if( $_POST )
{
  $con = mysql_connect("localhost", "root", "");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("boobsi", $con);

  $title = $_POST['title'];
  $text = $_POST['text'];
  
echo $title;
echo $text;

  $title = mysql_real_escape_string($title);
  $text = mysql_real_escape_string($text);

  

 $query = "
  INSERT INTO records (title, text) VALUES ('$title', '$text'); ";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}

?>
