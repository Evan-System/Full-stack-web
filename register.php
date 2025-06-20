<?php  
  include 'config/connect.php';

  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_registration</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h2 class="mt-5 text-center text info">Student Registration Form</h2>
            <form action="process_registration.php" method="posix_geteuid">
                <label for="name" class="mb-2">Full Name</label>
                <input type="text" name="full_name" class="form-control" placeholder="Enter your Full Name"required>
                <label for="phone" class="mb-2">Phone Number</label>
                <input type="text" name="phone_number" class="form-control" placeholder="Enter your Phone Number"required>
                <label for="email" class="mb-2">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter your Email"required>
                <label for="gender" class="mb-2">Gender</label>
                <select name="gender" id="gender" class="form-select"required>
                    <option value="">--Select Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-3 w-100">Register</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>
    
</body>
</html>