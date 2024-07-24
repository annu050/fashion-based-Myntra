<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["yourImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $n = $_POST["yourName"];

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
        // if ($_FILES["yourImage"]["size"] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }

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
                $conn = new mysqli("localhost","root","","myntra");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $filePath = addslashes($targetFile);

                // Insert image path into database
                $sql = "INSERT INTO photos (image_path, names) VALUES ('$filePath','$n')";

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
    ?>
</body>