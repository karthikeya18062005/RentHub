<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html>
<head><title>Available Houses</title></head>
<body>
<h2>Available Houses</h2>
<form method="GET">
    <input type="text" name="city" placeholder="Enter city" required>
    <button type="submit">Search</button>
</form>
<?php
if (isset($_GET['city'])) {
    $city = $conn->real_escape_string($_GET['city']);
    $sql = "SELECT * FROM houses WHERE city='$city' AND available=1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo "<div><img src='../uploads/{$row['photo']}' width='200'><h3>{$row['address']}</h3><p>Owner: {$row['owner_name']}</p><p>Price: ₹{$row['price']}/month</p></div><hr>";
        }
    } else {
        echo "<p>No houses found.</p>";
    }
}
?>
</body>
</html>