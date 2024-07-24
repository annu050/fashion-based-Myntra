<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" type="image/png" href="../Common Files/image/favicon.png">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="../Common Files/style.css">
    <script src="https://kit.fontawesome.com/24c494a6b6.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
    background: url(https://images.pexels.com/photos/167699/pexels-photo-167699.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
}
.mainContainer {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.flex-container {
    border-radius: 20px;
    overflow: hidden;
}
.getstarted-col {
    background-image: url(https://images.pexels.com/photos/699466/pexels-photo-699466.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
    background-position: center;
    background-size: cover;
    border-radius: 20px;
}
.getstarted-col .content:after {
    background: rgb(12,37,68);
    background: linear-gradient(90deg, rgba(12,37,68,1) 0%, rgba(23,53,95,1) 35%, rgba(26,72,111,1) 100%);
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.95;
    content: '';
    z-index: 0;
    border-radius: 15px;
}
.content-icon img {
    max-width: 200px;
}
.child-w-100 > * {
    width: 100%;
    z-index: 1;
}



/* BUTTONS */
.btn.btn-semitransparent {
    background: #ffffff40;
    color: #fff;
}
.signup-options-list button {
    width: 100%;
    transition: 0.2s background-color ease-in-out;
}
.signup-options-list button:hover {
    background-color: #fffbe7;
}

/* colors */
.text-secondary2 {
    color: #cdcdcd;
}
.icon-fb {
    color: #3B5997;
}
.icon-google {
    color: #F44242;
}


/* INPUTS */
.default-input {
    width: 100%;
    border: 1px solid #cccccc70;
    background: #EBF3F5;
    padding-right: 30px;
}
[error-notif] input {
    background: #ffe9e9;
    border: 1px solid #dc3545;
}
[success-notif] input {
    background: #d9f7db;
    border: 1px solid #198754;
}
.icon-feedback {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translate(0, -50%) scale(1.15);
}
.error-feedback {
    display: none;
}
[error-notif] .error-feedback {
    display: block;
}
.icon-feedback .icon {
    display: none;
}
[error-notif] .fa-circle-exclamation {
    display: block;
}   
[success-notif] .fa-circle-check  {
    display: block ;
} 
.content-icon {
    display: flex;
    align-items: center; /* Vertically center the items */
}

.content-icon img {
    max-width: 70%; /* Adjust the width as necessary */
    height: auto;
}

.text-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 20px; /* Adjust spacing as necessary */
}

.text-container .line {
    width: 100%; /* Full width of the container */
    height: 2px; /* Thickness of the line */
    background-color: black; /* Color of the line */
    margin: 10px 0; /* Spacing around the line */
}

.show-password {
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translate(0, -50%) scale(1.25);
    opacity: 0.45;
    transition: 0.2s all ease-in-out;
}
.show-password:hover {
    opacity: 1;
}
.show-password .icon {
    display: none;
}
.show-password.show .fa-eye-slash.icon {
    display: block ;
    cursor: pointer;
}
.show-password:not(.show) .fa-eye.icon {
    display: block ;
    cursor: pointer;
}
input[type="file"].default-input {
    border: 1px solid #ced4da;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    width: 100%;
    font-size: 1rem;
}
form {
    width: 85%;
    margin: 0 auto;
}

@media screen and (min-width: 768px) {
    .column {
        width: 50%;
    }
    .content-icon img {
        max-width: 270px;
    }
}

@media screen and (min-width: 991px) {
    .icon-feedback {
        transform: translate(0, -50%) scale(1.5);
    }
}

@media screen and (min-width: 1024px) {
    .content-icon img {
        max-width: 300px;
    }
    form {
        width: 95%;
    }
    .show-password {
        right: -30px;
    }
}


@media screen and (min-width: 1366px) {
    .signup-options-list button {
        width: 49%;
    }
    .form-wrapper {
        width: 450px;
    }
}


    </style>
</head>
<body>
    <!-- HEADER SECTION -->
    <header>
        <div id="logo">
            <img src="../Common Files/image/myntra-removebg-preview.png" alt="brandLogo" id="landingPage">
        </div>
        <ul id="nav_bar">
            <li id="megamenu_container"><a href="../Homepages/menHomePage.html">men</a></li>
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
                <!-- DROPDOWN MENU TO FOR LOGIN AND SIGNUP -->
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
                            <a href="../Homepages/menHomePage.html">men</a>
                            <a href="../Homepages/womenHomePage.html">women</a>
                            <a href="#">kids</a>
                            <a href="../Homepages/homeLiving.html">home & living</a>
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
    <div class="mainContainer" style="padding-top: 100px;">
        <div class="container">
            <div class="logiform-container py-4">
                <div class="flex-container d-flex flex-wrap justify-content-center bg-light p-0">
                    <div class="column d-block p-3 p-md-4 p-lg-5 p getstarted-col">
                        <div class="d-flex gap-4 content p-3 px-md-4 py-md-5 px-lg-5 child-w-100 flex-wrap position-relative h-100 align-items-center">
                                <div class="back-arrow position-relative">
                                    <button class="btn btn-semitransparent rounded-pill py-0 px-4 py-lg-2 px-lg-5"><i class="fa-solid fa-arrow-right-long text-white"></i></button>
                                </div>
                                <div class="text-content position-relative">
                                    <span class="text-secondary2">Hi Welcome!</span>
                                    <h2 class="text-white">Let's Get Started, THEME - DENIM FOR DAYS</h2>
                                    <p class="text-secondary2 mt-4" style="font-weight: bolder;">Participate and show case yorself and come in the hall of fame
                                    </p>
                                </div>
                                <div class="content-icon position-relative">
                                    <img src="../Homepages/Images/Firefly Cover page for denim for days fashion statement(a sketch of a fashion model with denim) and .jpg" alt="" class="w-100">
                                    <div class="text-container">
                                        <h1 style="font-size: 50px;color: #d9f7db;">DENIM</h1>
                                        <h1 style="font-size: 50px;color: #d9f7db;">FOR</h1>
                                        <h1 style="font-size: 50px;color: #d9f7db;">DAYS</h1>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                    <div class="column d-block p-3 d-flex align-items-center justify-content-center h-100">
                        <div class="content">
                            <div class="form-wrapper py-4">
                                <h2 class="mb-4">Participate: Theme:DENIM FOR DAYS</h2>
                                <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-input mb-3 p-0">
                                        <label for="yourname" class="text-secondary">Your Name</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <Input type="text" class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required" name="yourName" id="yourName" maxlength="20" ></Input>
                                            <div class="nameinput-icon-feedback icon-feedback">
                                                <i class="fa-solid fa-circle-exclamation text-danger icon"></i>
                                                <i class="fa-solid fa-circle-check text-success icon"></i>
                                            </div>
                                        </div>
                                        <small class="name-error-feedback error-feedback text-danger text-small"></small>
                                    </div>
                                    <div class="form-input mb-3 p-0">
                                        <label for="youremail" class="text-secondary">Your Email</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <Input type="text" class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required" name="yourEmail" id="yourEmail" maxlength="40"></Input>
                                            <div class="nameinput-icon-feedback icon-feedback">
                                                <i class="fa-solid fa-circle-exclamation text-danger icon"></i>
                                                <i class="fa-solid fa-circle-check text-success icon"></i>
                                            </div>
                                        </div>
                                        <small class="email-error-feedback error-feedback text-danger text-small"></small>
                                    </div>
                                    <div class="form-input mb-3 p-0">
                                        <label for="yourpassword" class="text-secondary">Your Password</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <Input type="password" class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required" name="yourPassword" id="yourPassword" maxlength="40"></Input>
                                            <div class="nameinput-icon-feedback icon-feedback">
                                                <i class="fa-solid fa-circle-exclamation text-danger icon"></i>
                                                <i class="fa-solid fa-circle-check text-success icon"></i>
                                            </div>
                                            <div id="showPassword" class="show-password">
                                                <i class="fa-solid fa-eye icon"></i>
                                                <i class="fa-solid fa-eye-slash icon"></i>
                                            </div>
                                        </div>
                                        <small><a href="javascript:void(0)" class="show-password"></a></small>
                                        <small class="pw-error-feedback error-feedback text-danger text-small"></small>
                                    </div>
                                    <div class="form-input mb-3 p-0">
                                        <label for="yourImage" class="text-secondary">Upload Image</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <input type="file" class="default-input rounded-pill py-1 ps-3 py-lg-2" name="yourImage" id="yourImage" accept="image/*">
                                        </div>
                                    </div>
                                    <button class="btn border  rounded-pill py-lg-2">
                                        Submit
                                    </button>
                                    
                                </form>
                                <div class="other-options-signup text-center py-3">
                                    
                                    <div class="signup-options-list d-flex flex-wrap gap-2 mt-2">
                                            <button class="btn border  rounded-pill py-lg-2">
                                                <i class="fa-brands fa-facebook me-1 icon-fb"></i>
                                                Signup with Facebook
                                            </button>
                                            <button class="btn border  rounded-pill py-lg-2">
                                                <i class="fa-brands fa-google-plus me-1 icon-google"></i>
                                                Signup with Google
                                            </button>
                                           
                                    </div>
                                    <div style="padding-top:10px;">
                                        <button class="btn border  rounded-pill py-lg-2">
                                        VOTE
                                    </button></div>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<!-- MODAL -->
<div class="modal fade" id="myModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Welcome to my Simple Signup Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4>Hello, <span id="accountName"></span></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>


<script>
    
const your_name = document.querySelector("#yourName");
const your_email = document.querySelector("#yourEmail");
const your_password = document.querySelector("#yourPassword");
const remember_me = document.querySelector("#yourname");
const btn_create_account = document.querySelector("#btnCreateAccount");
const btn_showpassword = document.querySelector("#showPassword");
const modal = document.querySelector("#myModal");


// LIST OF EVENTSLISTENDER
btn_create_account.addEventListener('click', (e) => {
    formCreateAccount(your_name.value,your_email.value,your_password.value);
}); 
your_name.addEventListener('change', (name_evt) => {
    inputCheckValueOnChage(name_evt.target.value, name_evt);
})
your_email.addEventListener('change', (name_evt) => {
    inputCheckValueOnChage(your_email.value, name_evt);
})
your_password.addEventListener('change', (name_evt) => {
    inputCheckValueOnChage(your_password.value, name_evt);
})
btn_showpassword.addEventListener('click', () => {
    toggleClass()
})




// FORM INPUT VALIDATION
const inputCheckValueOnChage =  (inputValue, inputName) => {
        
    switch (inputName.target.id) {
        case 'yourName': 
            if (inputValue.length < 6) {
                inputName.target.closest('div.form-input').removeAttribute('success-notif','');
                inputName.target.closest('div.form-input').setAttribute('error-notif','');
                document.querySelector(".name-error-feedback").innerHTML = "should more than 6 character" // Add label error notification
            } else {
                inputName.target.closest('div.form-input').removeAttribute('error-notif','');
                inputName.target.closest('div.form-input').setAttribute('success-notif','');
            }
            break;
        case 'yourEmail': 
            var validRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (inputValue.match(validRegex)) {
                inputName.target.closest('div.form-input').removeAttribute('error-notif','');
                inputName.target.closest('div.form-input').setAttribute('success-notif','');
            } else {
                inputName.target.closest('div.form-input').removeAttribute('success-notif','');
                inputName.target.closest('div.form-input').setAttribute('error-notif','');
                document.querySelector(".email-error-feedback").innerHTML = "incorrect email format" // Add label error notification
            }
            break;
        case 'yourPassword': 
            var passwordLower = /[a-z]+/;
            var passwordCapital = /[A-Z]+/;
            var passwordNumber = /[0-9]+/;
            var passwordSpecial = /[$@#&!]+/;
            if (inputValue.length < 10) {
                inputName.target.closest('div.form-input').removeAttribute('success-notif','');
                inputName.target.closest('div.form-input').setAttribute('error-notif','');
                document.querySelector(".pw-error-feedback").innerHTML = "should more than 10 character" // Add label error notification
            } else if (!inputValue.match(passwordLower)) {
                inputName.target.closest('div.form-input').removeAttribute('success-notif','');
                inputName.target.closest('div.form-input').setAttribute('error-notif','');
                document.querySelector(".pw-error-feedback").innerHTML = "password should have small letter" // Add label error notification
            } else if (!inputValue.match(passwordCapital)) {
                inputName.target.closest('div.form-input').removeAttribute('success-notif','');
                inputName.target.closest('div.form-input').setAttribute('error-notif','');
                document.querySelector(".pw-error-feedback").innerHTML = "password should have Capital letter" // Add label error notification
            } else if (!inputValue.match(passwordNumber)) {
                inputName.target.closest('div.form-input').removeAttribute('success-notif','');
                inputName.target.closest('div.form-input').setAttribute('error-notif','');
                document.querySelector(".pw-error-feedback").innerHTML = "password should have Number" // Add label error notification
            } else if (!inputValue.match(passwordSpecial)) {
                inputName.target.closest('div.form-input').removeAttribute('success-notif','');
                inputName.target.closest('div.form-input').setAttribute('error-notif','');
                document.querySelector(".pw-error-feedback").innerHTML = "password should have Special character" // Add label error notification
            } else {
                inputName.target.closest('div.form-input').removeAttribute('error-notif','');
                inputName.target.closest('div.form-input').setAttribute('success-notif','');
            }
            break;
    }
}

// FORM CREATE ACCOUNT FUNCTION
const formCreateAccount = (name, email, password) => {
    let array = [your_name, your_email, your_password]
    array.forEach(elem => {
        var parentDiv = elem.closest('.form-input');
    
        if (parentDiv.hasAttribute('error-notif')) {
            switch (elem.id) {
                case 'yourName':
                    document.querySelector(".name-error-feedback").innerHTML = "please follow correct format"
                    break;
                case 'yourEmail':
                    document.querySelector(".email-error-feedback").innerHTML = "please follow email format"
                    break;
                case 'yourPassword':
                    document.querySelector(".pw-error-feedback").innerHTML = "Input strong password"
                    break;
            }
        } else if (elem.value == "") {
            switch (elem.id) {
                case 'yourName':
                    parentDiv.setAttribute('error-notif','');
                    document.querySelector(".name-error-feedback").innerHTML = "your name is required"
                    break;
                case 'yourEmail':
                    parentDiv.setAttribute('error-notif','')
                    document.querySelector(".email-error-feedback").innerHTML = "your email is required"
                    break;
                case 'yourPassword':
                    parentDiv.setAttribute('error-notif','')
                    document.querySelector(".pw-error-feedback").innerHTML = "password is required"
                    break;
            }
        } else if (!(your_name.closest('.form-input').hasAttribute('error-notif')) && !(your_email.closest('.form-input').hasAttribute('error-notif')) && !(your_password.closest('.form-input').hasAttribute('error-notif')) && array[array.length -1] === elem) {
                    var myModal = new bootstrap.Modal(document.getElementById('myModal'))
                    myModal.show()
                    document.querySelector('#accountName').innerHTML = `${name}`
        }
    });
}

// Toggle Class
 const toggleClass = () => {
    let divElement = document.getElementById('showPassword');
    divElement.classList.toggle("show");

    if (divElement.classList.contains('show')) {
        your_password.removeAttribute('type', 'password');
        your_password.setAttribute('type', 'text');
    } else {
        your_password.removeAttribute('type', 'text');
        your_password.setAttribute('type', 'password');
    }

 }
</script>
</body>
</html>

