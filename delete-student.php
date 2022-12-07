<?php
require('dbconnect.php');
$student_id = $_GET['id'];

if (isset($_GET['id'])) {


    $sql = "DELETE FROM student WHERE student_id = $student_id";

    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        header('location: students.php');
    } else {
        echo "DELETION FAILED";
    }
}
