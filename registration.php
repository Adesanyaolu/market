<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h3>Sign Up</h3>
         <form action="registration.php" method="POST">
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
   </body>
 </html>


 <?php
   session_start ();
  // header('location:dashboard.php');

   $con = mysqli_connect('localhost', 'root', '');

   mysqli_select_db($con, 'vendor');

   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $s = "SELECT * FROM vendors WHERE name = '$name'";

   $result = mysqli_query($con, $s);

   $num = mysqli_num_rows($result);

   if ($num == 1){
     echo "Username already exists";
   } else {
     $reg = " INSERT into vendors (Name , Email, Password) VALUES ('$name', '$email', '$password')";
     mysqli_query($con, $reg);
     echo "Registration successful";
   }


  ?>
