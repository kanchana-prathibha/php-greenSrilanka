<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: Login.php");
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
                            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
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
                        <li>
                        <a href="logout.php" class="btn btn-warning">Logout <span><i class="fa-solid fa-right-from-bracket"></i></span> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inbox.php">Inbox&nbsp;<i class="fa-solid fa-message fa-shake fa-2xl" style="color: #ffbb00;"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</div>
<!--nav-bar-end-->
<!--main slider start-->
<div class="main-slider">
    <div id="slider-container">

        <img class="slider-image" src="https://www.villagesquare.in/wp-content/uploads/2021/04/pexels-sajals-gallery-7415330-scaled.jpg" alt="Image 1">
        <img class="slider-image" src="https://icdonline.com.au/wp-content/uploads/2019/10/shutterstock_598749548.jpg" alt="Image 2">
        <img class="slider-image" src="https://www.andbeyond.com/wp-content/uploads/sites/5/sri-lanka-hill-country-hatton-tea-plantation.jpg" alt="Image 3">
        <!--Articals  container start-->
        <div class="container">
            <div class="row">
                <!-- First Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://www.dnv.com/Images/precision-agriculture-1920x1080_tcm78-162278.jpg" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title">What is the Eco Farming </h5>
                            <button type="button" class="btn btn-primary">Read More<i class="fa-solid fa-angle-up fa-rotate-90"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://www.knorr.lk/Images/2809/2809-1259641-Spice%20-%20580x386.jpg" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Import & Export Services
                            </h5>
                            <button type="button" class="btn btn-primary">Read More<i class="fa-solid fa-angle-up fa-rotate-90"></i></button>

                        </div>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <img src="https://balabs.com/wp-content/uploads/2021/12/iStock-1288565333.jpg"  class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Laboratory Services</h5>
                            <button type="button" class="btn btn-primary">Read More<i class="fa-solid fa-angle-up fa-rotate-90"></i></button>

                        </div>
                    </div>
                </div>


            </div>
        </div><!--Articals  container end-->


    </div>
</div>


<!--main slider end-->


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