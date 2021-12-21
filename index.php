<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data insert php</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="main_one">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid center-content">
                <a href="#" class="navbar-brand">MS</a>
                <button type="button" class="navbar-toggler " data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">Profile</a>
                        <a href="#" class="nav-item nav-link">Messages</a>
                        <a href="#" class="nav-item nav-link" tabindex="-1">About</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a href="#" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="heading">
            <div class="card title center-content">
                <h1>Hi-Tech Institute Of Technology</h1>
            </div>
        </section>
    </div>
    <section class="form-data">
        <form class="center-content" action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Name" name="name">
                </div>
                <div class="form-group col-md-6">
                    <label>College Name</label>
                    <input type="text" class="form-control" placeholder="College Name" name="college">
                </div>
                <div class="form-group col-md-6">
                    <label>Email Id</label>
                    <input type="text" class="form-control" placeholder="Enter Your Email Id" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label>Roll No</label>
                    <input type="" class="form-control" placeholder="Enter Your Roll No" name="roll">
                </div>
            </div>
            <div class="form-group">
                <label >Address</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your Address" name="address">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Enter Your City" name="city">
                </div>
                <div class="form-group col-md-4">
                    <label>State</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Enter Your State" name="state">
                </div>
                <div class="form-group col-md-2">
                    <label >Zip</label>
                    <input type="text" class="form-control" id="inputZip" placeholder=" Enter Zip Code" name="zip">
                </div>
            </div>
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-dark mt-3" name="submit" style="padding: .5rem 1.5rem; font-size: 1.5rem;">Submit</button>
        </form>
    </section>

    <div class="main_two">
        <div class="owner">
            <h3>
                Developed & Designed By - Mukesh Shelke</h3>
        </div>
    </div>
</body>

</html>

<?php

include 'connection.php';
// isset function checks the variable u are passing in is set or not (to check null or empty )
// $_post is a php super global variable which is used to collect form data after submiting html form 
// method="POST"
if(isset($_POST['submit'])){
///creating variables of input field using name attribute
    $name = $_POST['name'];
    $college = $_POST['college'];
    $email = $_POST['email'];
    $roll = $_POST['roll'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip']; 

// creating a variable $insert  
    $insert = " insert into data(name,college,email,roll,address,city,state,zip) values('$name','$college','email','$roll','$address','$city','$state','$zip')";

// mysqli query function we are passing $con variable which we created on top and insert query 
    $res = mysqli_query($con,$insert);

    // pop up message when data inserted successfully

    if($res){
        ?>
        <script>
            alert("data inserted successfully")
        </script>
        <?php
    }
    else{
    ?>
    <script>
        alert("data not inserted properly")
    </script>
    <?php
}
}
?>