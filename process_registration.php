<?php
//Database connection file
include 'config/connect.php';

//process the registration
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

      // prepare and bind the SQL statement
      $stmt = $conn->prepare("INSERT INTO students (full_name,phone_number,email,gender) VALUES (?,?,?,?)");
      $stmt->bind_param( "ssss", $full_name, $phone_number, $email, $gender);

      //Execute the statement
      if($stmt->execute()) {
        echo "New student registered successfully";
        header("Location: register.php?msg=success");
      }else{
        echo "Error: " . $stmt->error;
        header("Location: register.php?msg=error");
      }
      // Close Connections
      $stmt->close();
      mysqli_close($conn);
}
