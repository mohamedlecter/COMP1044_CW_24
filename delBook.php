<?php
require('connection.php');
$id = $_REQUEST["id"];
mysqli_query($link, " DELETE FROM book WHERE book_id=' $id'");
$message = "Record Modified Successfully";
header("Location: display_books.php");
