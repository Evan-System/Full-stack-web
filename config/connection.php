<?php
$conn = mysqli_connect("localhost", "root", "", "student_reg");
//check connection
if (!$conn) {
    echo "connection failed:" . mysqli_connect_error();
}
