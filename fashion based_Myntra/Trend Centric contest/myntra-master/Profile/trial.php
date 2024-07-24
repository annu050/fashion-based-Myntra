<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Display Images</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            padding: 0;
        }
        .image-wrapper {
            width: calc(33.33% - 10px);
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }
        .button {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Upload and Display Images</h1>

    <?php
    // Database connection details

    // Create connection
    $conn = new mysqli("localhost","root","","myntra");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $targetDir = "uploads/";
        
        // Check if the uploads directory exists, if not create it
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $targetFile = $targetDir . basename($_FILES["yourImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["yourImage"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["yourImage"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // If everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["yourImage"]["tmp_name"], $targetFile)) {
                // Database connection
                $filePath = addslashes($targetFile);

                // Insert image path into database
                $sql = "INSERT INTO photos (image_path) VALUES ('$filePath')";

                if ($conn->query($sql) === TRUE) {
                    echo "The file ". htmlspecialchars(basename($_FILES["yourImage"]["name"])). " has been uploaded.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }

    // Fetch and display images
    $sql = "SELECT image_path FROM photos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="container">';
        while($row = $result->fetch_assoc()) {
            echo '<div class="image-wrapper">';
            echo '<img src="'. $row["image_path"] .'" alt="Uploaded Image">';
            echo '<div class="buttons">';
            echo '<button class="button">Vote</button>';
            echo '<a href="../Profile/participation_upload.html"><button class="button">Participate</button></a>';
            echo '</div></div>';
        }
        echo '</div>';
    } else {
        echo "No images found.";
    }

    $conn->close();
    ?>
</body>
</html>
