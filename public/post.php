<?php 
session_start();
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'owner') header('Location: index.php');
include('../includes/db.php'); 
?>
<!DOCTYPE html>
<html>
<head><title>Post a House</title></head>
<body>
<h2>Post Your House</h2>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="city" placeholder="City" required><br>
    <textarea name="address" placeholder="Full Address" required></textarea><br>
    <input type="number" name="price" placeholder="Monthly Rent" required><br>
    <input type="file" name="photo" accept="image/*" required><br>
    <button type="submit" name="submit">Post</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $owner = $_SESSION['user'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $photo = $_FILES['photo']['name'];
    $target = "../uploads/" . basename($photo);
    move_uploaded_file($_FILES['photo']['tmp_name'], $target);
    $sql = "INSERT INTO houses (owner_name, city, address, price, available, photo) VALUES ('$owner', '$city', '$address', $price, 1, '$photo')";
    echo $conn->query($sql) ? "<p>Posted successfully</p>" : "<p>Error: " . $conn->error . "</p>";
}
?>
</body>
</html>
