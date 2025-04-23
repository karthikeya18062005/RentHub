<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
<h2>Register</h2>
<form method="POST" action="">
  <label><input type="radio" name="role" value="owner" required> Owner</label>
  <label><input type="radio" name="role" value="customer" required> Customer</label><br>
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit" name="register">Register</button>
</form>
<?php
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
  if ($conn->query($sql)) {
    echo "<p>Registered successfully. <a href='index.php'>Login</a></p>";
  } else {
    echo "<p>Error: " . $conn->error . "</p>";
  }
}
?>
</body>
</html>