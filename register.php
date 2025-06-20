<?php include 'includes/navbar.php';
include 'includes/links.php';
?>
<!-- Add SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
// Process the registration form submission
include('config/connection.php'); // Connect to db first

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admission_number = $_POST['admission_number'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];

    $stmt = $conn->prepare("INSERT INTO students (admission_number, full_name, email, phone_number, course, gender) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $admission_number, $full_name, $email, $phone, $course, $gender);

    if ($stmt->execute()) {
        header("Location: register.php?msg=success");
    } else {
        header("Location: register.php?msg=error");
    }

    $stmt->close();
    $conn->close();
}

// Check for success/error messages
if (isset($_GET['msg'])) {
    if ($_GET['msg'] === 'success') {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Student registered successfully!',
                confirmButtonColor: '#3085d6'
            });
        </script>";
    } else if ($_GET['msg'] === 'error') {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Failed to register student. Please try again.',
                confirmButtonColor: '#d33'
            });
        </script>";
    }
}
?>
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Registration</h2>
        <div class="bg-white p-4 rounded shadow-md">
            <form action="" method="POST">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="admission_number" class="form-label">Admission Number</label>
                        <input type="text" id="admission_number" name="admission_number" class="form-control"
                            placeholder="Enter your admission number" required>
                    </div>
                    <div class="col-md-6">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="form-control"
                            placeholder="Enter your full name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="Enter your email address" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" id="phone" name="phone_number" class="form-control"
                            placeholder="Enter your phone number" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <input type="text" id="course" name="course" class="form-control"
                        placeholder="Enter your course name" required>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select" required>
                        <option value="">Select your gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>