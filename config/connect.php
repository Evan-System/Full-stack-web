<!-- variable initialization -->
<?php
$ServerName='localhost';
$UserName='root';
$Password='';
$DatabaseName='student_registration';
//create connection
$conn= mysqli_connect($ServerName,$UserName,$Password,$DatabaseName);
if(!$conn) {
    die("connection failed:". mysqli_connect_error());
}
