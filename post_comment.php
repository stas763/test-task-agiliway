<?php
mysql_connect("127.0.0.1:3306", "root", "");
mysql_select_db("rating");

$name = $_POST["name"];
$email = $_POST["email"];
$rating = $_POST["rating"];
$comment = $_POST["comment"];
$comment_length = strlen($comment);

if($comment_length > 100)
{
  header("location: index.php?error=1");
}
else
{
  mysql_query("INSERT INTO rating (name, email, rating, comment) VALUES('$name', '$email', '$rating', '$comment')");
  header("location: index.php");
}
?>
