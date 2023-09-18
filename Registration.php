<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="imgs/wheat-grain-agriculture-logo-design-template-vector-removebg-preview.png">
    <title>Green Srilanka</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/RegisterFrom.css">
</head>
<body>
<!--nav-bar-start-->
<div class="container-fluid" id="navbarNav1">
    <div class="row">
        <div class="nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-outer">
                <img src="imgs/1600w-EopC-HgEgK8.png" alt="" style="height: 80px;width: 220px;margin-right: 50px">
                <!--<a class="navbar-brand" href="#">Your Website</a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="AboutUs.html">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <a class="dropdown-item" href="RegisterFrom.html">Registration</a>
                                <a class="dropdown-item" href="#">Ecological Farming Details</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="fieldOfficersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Field Officers
                            </a>
                            <div class="dropdown-menu" aria-labelledby="fieldOfficersDropdown">
                                <a class="dropdown-item" href="#">Profiles</a>
                                <a class="dropdown-item" href="#">Contact</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="farmersCornerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user fa-sm"></i>&nbsp;&nbsp;Account</a>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="farmersCornerDropdown">
                                <a class="dropdown-item" href="Registration.php">Register</a>
                                <a class="dropdown-item" href="Login.php">Login</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>

</div>
<!--nav-bar-end-->

<!--Registration form start-->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Registration Form
                </div>
                <div class="container">
                    <?php
                    if (isset($_POST["submit"])) {
                        $fullName = $_POST["fullname"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];
                        $passwordRepeat = $_POST["repeat_password"];

                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        $errors = array();

                        if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
                            array_push($errors,"All fields are required");
                        }
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            array_push($errors, "Email is not valid");
                        }
                        if (strlen($password)<4) {
                            array_push($errors,"Password is too short");
                        }
                        if ($password!==$passwordRepeat) {
                            array_push($errors,"Password does not match");
                        }
                        require_once "database.php";
                        $sql = "SELECT * FROM users WHERE email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $rowCount = mysqli_num_rows($result);
                        if ($rowCount>0) {
                            array_push($errors,"Email already exists!");
                        }
                        if (count($errors)>0) {
                            foreach ($errors as  $error) {
                                echo "<div class='alert alert-danger'>$error</div>";
                            }
                        }else{

                            $sql = "INSERT INTO users (first_name, email, password) VALUES ( ?, ?, ? )";
                            $stmt = mysqli_stmt_init($conn);
                            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                            if ($prepareStmt) {
                                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                                mysqli_stmt_execute($stmt);
                                echo "<div class='alert alert-success'>You are registered successfully.</div>";
                            }else{
                                die("Something went wrong");
                            }
                        }


                    }
                    ?>
                    <form action="Registration.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
                        </div>
                        <div class="form-group">
                            <input type="emamil" class="form-control" name="email" placeholder="Email:">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password:">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
                        </div>
                        <div class="form-btn">
                            <input type="submit" class="btn btn-primary" value="Register" name="submit">
                        </div>
                    </form>
                    <div>
                        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/64885af1cc26a871b0224037/1h2qa6g77';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->


<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Contact Us</h3>
                <p>Email: greensrilanka@gmail.com</p>
                <p>Phone: 0773465426</p>
            </div>
            <div class="col-md-6">
                <h3>Location</h3>
                <iframe src="https://maps.google.com/maps?q=Department%20of%20Agriculture&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 450px; height: 400px;"></iframe><a href="https://www.eireportingonline.com">
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d8fba019aa.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="js/Registerfromvalidate.js"></script>
<script src="js/main.js"></script>
</body>
</html>
