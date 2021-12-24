<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "useraccounts";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Active Users</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="registration.php"><h4>Registration</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="displayUsers.php"><h4>Users</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="crud.php"><h4>CRUD</h4></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </nav>

    <div class="container my-5">


      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Number</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          
          <?php

            $sql = "SELECT id, firstname, phonenumber, email FROM users";
            $result = mysqli_query($con, $sql);

            if($result)
            {
              while ($row = mysqli_fetch_assoc($result)) 
              {
                $id = $row['id'];
                $firstname = $row['firstname'];
                $phonenumber = $row['phonenumber'];
                $email = $row['email'];

                echo ' <tr>
                <th scope="row">'.$id.'</th>
                  <td>'.$firstname.'</td>
                  <td>'.$phonenumber.'</td>
                  <td>'.$email.'</td>
                </tr>';
              }
            }
          ?>


        </tbody>
      </table>
    </div>

  </body>
</html>