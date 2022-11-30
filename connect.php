<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];

$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "database") or die("connection failed");
$sql = "INSERT INTO database_form(name, Email, subject,  Message) VALUES ('{$name}','{$email}','{$subject}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/Responsive/index.html");
mysqli_close($conn);
?>