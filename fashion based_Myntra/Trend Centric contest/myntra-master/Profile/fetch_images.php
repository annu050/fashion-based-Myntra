<?php


$conn = new mysqli("localhost","root","","myntra");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT image_path FROM photos";
$result = $conn->query($sql);

$images = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $images[] = $row["image_path"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>