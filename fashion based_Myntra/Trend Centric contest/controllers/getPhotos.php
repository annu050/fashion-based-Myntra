<?php
include_once '../config/db.php';

$query = "SELECT * FROM photos ORDER BY uploaded_at DESC";
$result = $conn->query($query);

$photos = array();
while ($row = $result->fetch_assoc()) {
    $photos[] = $row;
}

echo json_encode($photos);
?>
