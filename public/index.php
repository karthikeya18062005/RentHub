<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>RentHub - Login</title>
</head>
<body>
<h2>Login</h2>
<form method="POST" action="">
    <label><input type="radio" name="role" value="owner" required> Owner</label>
    <label><input type="radio" name="role" value="customer" required> Customer</label><br>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login">Login</button>
</form>
<p>No account? <a href="register.php">Register here</a></p>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['user'] = $username;
        $_SESSION['role'] = $role;
        header("Location: " . ($role == 'owner' ? "post.php" : "search.php"));
    } else {
        echo "<p>Invalid credentials</p>";
    }
}
?>
</body>
</html>
