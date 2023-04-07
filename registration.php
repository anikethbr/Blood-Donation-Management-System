<?php
require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=McLaren&family=Merriweather&family=Montserrat&family=Poppins&family=Roboto:wght@300;400&family=Sacramento&family=Titillium+Web:wght@300;400;600&family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/registration.css">
    <title>Blood Donation Mangement System</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-light">
        <div class="container">
            <div class="justify-content-end">
                <i class="fas fa-tint fa-lg" style="color: #ff0000;"></i>
            </div>
            <a class="navbar-brand" href="#Home"><span class="navbar-name"><span class=" navbar-name-segment">Blood </span>Donation</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./donor.php">Donors</a>
                    <li class="nav-item">
                        <a class="nav-link" href="./registration.php">Registration</a>
                    <li class="nav-item">
                        <a class="nav-link" href="./finddonor.php">Find A Donor</a>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="register">
        <div class="registration">
            <div>
                <h3 class="heading">Registration</h3>
            </div>


            <form name='register' method="get" action="">
                <div class="form-group my-3">
                    <label for="name">Name </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group my-3">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age">
                </div>
                <div class="form-group my-3">
                    <label for="gender">Gender</label>
                    <select class="form-select form-select" name="gender" id="gender">
                        <option selected disabled>Select</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="bloodgroup">Blood Group</label>
                    <select class="form-select form-select" name="bloodgroup" id="bloodgroup">
                        <option selected disabled>Select</option>
                        <option value="A pos">A+</option>
                        <option value="A neg">A-</option>
                        <option value="B pos">B+</option>
                        <option value="B neg">B-</option>
                        <option value="O pos">O+</option>
                        <option value="O neg">O-</option>
                        <option value="AB pos">AB+</option>
                        <option value="AB neg">AB-</option>
                    </select>
                </div>
                <div class="form-group my-3">
                    <label for="mobile">Mobile</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
                </div>
                <div class="form-group my-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                </div>
                <div class="form-group my-3" style="text-align:center;">
                    <button type="submit" name="submit" class="btn btn-lg btn-danger">Submit</button>
                </div>
            </form>
        </div>
    </section>


    <?php
        if(array_key_exists('submit',$_GET)){
            // echo"<script>alert('yes');</script>";
            $name = $_GET['name'];
            $age = $_GET['age'];
            $gender = $_GET['gender'];
            $bg = $_GET['bloodgroup'];
            $mobile = $_GET['mobile'];
            $email = $_GET['email'];
            // echo $name,$age,$gender,$bg,$mobile,$email;
            // echo "<br>";
            $max_id = mysqli_query($con,"select max(id) from donors");
            $id = (int)$max_id+1;
            $sql = "insert into donors values($id,'$name',$age,'$gender','$bg',$mobile,'$email');";
            // echo $sql;
            $res = mysqli_query($con,$sql);
            if($res){
                echo"<script>alert('Registration Successful');</script>";
                $_SESSION[$id]=1;
            }
        }
    ?>

    <footer>
        <div>
            <table>
                <tr>
                    <td><a href="https://github.com/anikethbr"><i class="social-icon fab fa-github"></i></a></td>
                    <td><a href="https://twitter.com/Aniketh_2002"><i class="social-icon fab fa-twitter"></i></a></td>
                    <td><a href="https://www.linkedin.com/in/aniketh-b-r-a1ab611b1/"><i class="social-icon fa fa-linkedin"></i></a></td>
                    <td><a href="mailto:anikethbr73@gmail.com"><i class="social-icon fas fa-envelope"></i></a></td>
                </tr>
            </table>
            <p class="cpy">©Copyright Aniketh B R 2023
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a4e2abdcac.js" crossorigin="anonymous"></script>
</body>

</html>