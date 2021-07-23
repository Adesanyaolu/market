<?php
    session_start();
/*


    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "vendor";

    // create connection
    try {
      $conn = new PDO("mysql:host=$servername;dbname=vendor", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected succesfuly";
    } catch (PDOException $e) {
      echo "Connection Failed: ". $e->getMessage();
    }

    $conn = null;
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Market Place</title>
</head>
<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="market.php">Market Place</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign-up.php">Register as a Vendor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Vendor Log-In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <center>
    <h3>Sign Up</h3>
        <form action="sign-up.php" method="POST">
            <div>
                <input type="text" name="name" placeholder="Name" required>
            </div>
            <br>
            <div>
                <input type="email" name="email" placeholder="Email" value="" required>
            </div>
            <br>
            <div>
                <input type="password" name="password" placeholder="Password" value="" required>
            </div>
            <br>
                <input type="submit" name = "submit" value="submit"></br>
                </br><p class="final">Already have an account? <a href="login.php">Log In</a></p>
        </form>
      </center>

        <?php
        /* Form actions
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (isset ($_POST['submit'])){
              // Send data to database
              // Escape user input for security
              $sql = "INSERT INTO vendors (Name, Email, Password) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["name"]."')";
              $conn->exec($sql);
                echo "<h4> Welcome '$name' </h4>";
                echo "<h4> Your registered mail is ' $email ' </h4>";
                echo "<h4> Your password is ' $password ' keep it safe.</h4>";
            }
        }

        // Saving data in session
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
        }

        */
          ?>
            <center>
              <?php


              // servername => localhost
              // username => root
              // password => empty
              // database name => vendor
              $conn = mysqli_connect("localhost", "root", "", "vendor");

              // Check connection
              if($conn === false){
                  die("ERROR: Could not connect. "
                      . mysqli_connect_error());
              }

              // Taking all values from the form data(input)
              $name =  $_POST['name'];
              $email = $_POST['email'];
              $password =  $_POST['password'];


              // Performing insert query execution

              $sql = "INSERT INTO vendors (Name, Email, Password) VALUES ('$name',
                      '$email','$password')";


              $result = mysqli_query($conn, $sql);

              // Close connection
              mysqli_close($conn);


              if (isset($_POST['submit'])){

                echo "Reg Succesful";
                header('location:dashboard.php');
              }
              ?>
          </center>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
