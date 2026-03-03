<?php
include 'db.php';

if(isset($_POST['title'])){
    $title = $conn->real_escape_string($_POST['title']);
    $conn->query("INSERT INTO todos(title) VALUES('$title')");
}

header("Location: index.php");
exit;
?>