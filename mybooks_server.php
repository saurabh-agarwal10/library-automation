<?php
  // include('studentlogin.php');
  session_start();
  $servername = "localhost";
$username = "root";
$password = "";
$database = "online_library";

$conn = new mysqli($servername, $username, $password,$database);
 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn ->select_db($database) or die( "Unable to select database");
if(isset($_GET["isbn_return"]))
{
    $book_id=$_GET["isbn_return"];

    $sql="UPDATE borrow_return SET issues=0, usn='0' WHERE isbn=".$book_id."";
    $result = mysqli_query($conn, $sql);
    echo "Success";
    
}