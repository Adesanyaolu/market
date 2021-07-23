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
      <h3>Log In</h3>
          <form method="POST">
              <div>
                  <input type="email" name="email" placeholder="Email" value="" required>
              </div>
              <br>
              <div>
                  <input type="password" name="password" placeholder="Password" required id="password-label">
              </div>
              <br>
                  <input type="submit" name = "submit" type = "submit">
              </br>
            </br><p class="final">Don't have an account? <a href="sign-up.php">Sign Up</a></p>
          </form>
      </center>


      <?php
      session_start ();
     // header('location:dashboard.php');

      $con = mysqli_connect('localhost', 'root', '');

      mysqli_select_db($con, 'vendor');


      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM vendors WHERE Email = '$email' AND Password = '$password'";
      $row  = mysqli_fetch_array($sql);
      if(is_array($row)) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
          header("Location: dashboard.php");
      } else {
          echo "Invalid Email ID/Password";
      }


      ?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
