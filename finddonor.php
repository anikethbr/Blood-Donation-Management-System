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
    <link rel="stylesheet" href="./css/donors.css">
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

    <section id="donors">
        <div class="findadonor">
            <h3 class="heading">Find a Donor</h3>
            <form name='find' method="get" action="">
                <div class="form-group my-3">
                    <label for="bloodgroup">Select Blood Group</label>
                    <select class="form-select form-select" name="bloodgroup" id="bloodgroup">
                        <option selected disabled>Select a blood group</option>
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
                <div class="form-group my-3" style="text-align:center;">
                    <button type="submit" name="search" class="form-control btn btn-lg btn-danger">Submit</button>
                </div>
            </form>
        </div>
        <div class="donor-list">
            <?php
            if (array_key_exists('search', $_GET)) {
                echo "
                        <table class='redTable'>
                        <thead>
                            <tr>
                                <th>Sl. No</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Blood Group</th>
                                <th>Mobile</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                    ";
                $i = 0;
                $bg = $_GET['bloodgroup'];
                $sql = "select * from donors where bloodgroup = '$bg'";
                $res = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($res)) {
                    $i++;
                    $name = $row['name'];
                    $age = $row['age'];
                    $gender = $row['gender'];
                    $bg = $row['bloodgroup'];
                    $mobile = $row['mobile'];
                    $email = $row['email'];

                    echo "
                        <tr>
                            <td>$i</td>
                            <td>$name</td>
                            <td>$age</td>
                            <td>$gender</td>
                            <td>$bg</td>
                            <td>$mobile</td>
                            <td>$email</td>
                        </tr>
                        ";
                }
                echo "
                        </tbody>
                    </table>
                    ";
            }
            ?>
        </div>
    </section>

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