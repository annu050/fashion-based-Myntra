<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping for Women - Shop For Women Clothes, Shoes, Bags & More</title>
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <link rel="stylesheet" href="../Common Files/style.css">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
    <style>
        .image-container {
            text-align: center;
            padding: 150px;
        }

        #clickableImage {
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), border-color 0.3s ease-in-out;
            padding: 10px;
            cursor: pointer;
            border: 5px solid pink;
            border-radius: 15px;
        }

        #clickableImage:hover {
            transform: scale(1.05);
        }

        #clickableImage:active {
            transform: scale(0.95);
            border-color: hotpink;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            width: 90%;
            margin: 20px auto;
        }

        .image-wrapper {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            width: 100%;
            padding-bottom: 100%; /* Maintain square aspect ratio */
        }

        .image-wrapper img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        }

        .image-wrapper:hover img {
            transform: scale(1.1);
            filter: blur(5px);
        }

        .buttons {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .image-wrapper:hover .buttons {
            opacity: 1;
        }

        .button {
            background-color: #ff4081;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .button:hover {
            background-color: #e91e63;
        }
    </style>
</head>
<body>
    <!-- MENU BAR -->
    <header>
        <div id="logo">
            <img src="../Common Files/image/myntra-removebg-preview.png" alt="brandLogo" id="landingPage">
        </div>
        <ul id="nav_bar">
            <li><a href="../Homepages/menHomePage.html">men</a></li>
            <li><a href="../Homepages/index.html">women</a></li>
            <li><a href="#">kids</a></li>
            <li><a href="../Homepages/homeLiving.html">home & living</a></li>
            <li><a href="#">beauty</a></li>
            <li id="studio"><a href="#">studio</a><span>new</span></li>
        </ul> 
        <div id="search">
            <input type="text" id="search_bar" placeholder="Search for products, brands and more">
            <i class="fa-solid fa-magnifying-glass" id="search_icon"></i>
        </div>
        <div id="right_icon">
            <div id="reggDropdown">
                <!-- DROPDOWN MENU TO BE CREATED FOR LOGIN AND SIGNUP -->
              <div id="drop">
                  <a href="../Profile/profile.html" class="dropList">login</a>
                  <a href="../Profile/signup.html" class="dropList">sign up</a>
              </div>

              <i class="fa-regular fa-user"></i>
              <span>profile</span>
          </div>
            <div>
                <i class="fa-regular fa-heart"></i>
                <span>wishlist</span>
            </div>
            <div>
                <i class="fa-solid fa-bag-shopping"></i>
                <span>bag</span>
            </div>
        </div>

                <!-- TOGGLE MENU -->
                <div id="toggle">
                    <i class='bx bx-menu dropbtn' onclick="myFunction()"></i>
                    <div id="myDropdown" class="dropdown-content">
                        <div class="top">
                            <a href="menHomePage.html">men</a>
                            <a href="womenHomePage.html">women</a>
                            <a href="#">kids</a>
                            <a href="homeLiving.html">home & living</a>
                            <a href="#">beauty</a>
                            <a href="#">studio</a>
                        </div> 
                        <div class="bottom">
                            <i class="fa-regular fa-user fa_user" id="profile"></i>
                            <i class="fa-regular fa-heart fa_wishlist"></i>
                            <i class="fa-solid fa-bag-shopping fa_cart"></i>
                        </div>           
                    </div>
                </div>

    </header>

    <div class="image-container" style="padding-bottom: 0%;padding-left: 130px;">
        <a href="contest.html">
            <img id="clickableImage" src="Join Our Trend-Centric (1).png" alt="Join Our Trend-Centric" style="padding-left: 5px; transition: transform 0.3s ease-in-out; cursor: pointer;">
        </a>
    </div>
    <div class="container" style="padding: 0%;">
        
        
    </div>
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
            echo '<button class="button"> Like </button>';
            echo '</div></div>';
        }
        echo '</div>';
    } else {
        echo "No images found.";
    }

    $conn->close();
    ?>

    <!-- FOOTER SECTION -->
    <footer>
        <section id="section_1">
            <div id="left">
                <div>
                    <h4>online shopping</h4>
                    <p>men</p>
                    <p>women</p>
                    <p>home & living</p>
                    <p>beauty</p>
                    <p>gift cards</p>
                    <p>myntra insider<span id="latest">New</span></p>
                </div>
                <div>
                    <h4>useful links</h4>
                    <p>men</p>
                    <p>faq</p>
                    <p>t&c</p>
                    <p>terms of use</p>
                    <p>track order</p>
                    <p>shipping</p>
                    <p>cancellation</p>
                    <p>returns</p>
                    <p>whitehat</p>
                    <p>blog</p>
                    <p>careers</p>
                    <p>privacy policy</p>
                    <p>site map</p>
                </div>
                <div>
                    <h4>experience myntra app on mobile</h4>
                    <div>
                        <img src="../Common Files/image/ios.png" alt="ios" id="apple" />
                        <img src="../Common Files/image/android.png" alt="android" id="android" />
                    </div>
                </div>
                <div>
                    <h4>keep in touch</h4>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter-square"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div id="right">
                <img src="../Common Files/image/original.png" alt="original" />
                <div>
                    <b>100% ORIGINAL </b> guarantee for all products at myntra.com
                </div>
            </div>
            <div id="right">
                <img src="../Common Files/image/return.png" alt="return" />
                <div>
                    <b>Return within 30days </b> of receiving your order
                </div>
            </div>
        </section>
        <section id="section_2">
            <div>
                <p>
                    In case of any concern, <span>Contact Us</span>
                </p>
            </div>
            <div>
                <p>&copy; 2023 www.myntra.com. All rights reserved.</p>
            </div>
        </section>
    </footer>

    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>