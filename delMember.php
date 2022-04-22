<?php

require('connection.php');

$id = $_REQUEST["id"];
mysqli_query($link, " DELETE FROM member WHERE member_id=' $id'");
$message = "Record Modified Successfully";
header("Location: display_student_info.php");
