<?php

$conn = mysqli_connect('localhost', 'root', '', 'user_db');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error = ''; // Initialize error message

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $select = "SELECT * FROM user_form WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        $user_type = $row['user_type']; 

        if (password_verify($password, $hashed_password)) {
            if ($user_type === 'admin') {
                echo "<script>
                        alert('Admin login successful');
                        window.location.href = 'Admin.html';
                      </script>";
                exit();
            } else if ($user_type === 'user') {
                echo "<script>
                        alert('User login successful');
                        window.location.href = 'Index.html';
                      </script>";
                exit();
            } else if ($user_type === 'staff') {
                echo "<script>
                        alert('Staff login successful');
                        window.location.href = 'staff.html';
                      </script>";
                exit();
            }
        } else {
            // Incorrect password
            $error = "Invalid email or password.";
        }
    } else {
        // User not found
        $error = "Invalid email or password.";
    }

    if (!empty($error)) {
        echo "<script>
                alert('$error');
                window.location.href = 'login.php';
              </script>";
    }
}

mysqli_close($conn);
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/Register_Login.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="Login" class="form-btn">
            <p>Don't have an account? <a href="Register.php">Register now</a></p>
        </form>
    </div>
</body>
</html>


