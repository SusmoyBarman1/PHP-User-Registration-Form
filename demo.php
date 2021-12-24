<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <style>
        table 
        {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th 
        {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) 
        {
          background-color: #dddddd;
        }
    </style>


  </head>


  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="registration.php">Registration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="demo.php">Users<span class="sr-only">(current)</span></a>
            </li>
        </div>
      </nav>



      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "useraccounts";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) 
      {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT id, firstname, phonenumber, email FROM users";
      $result = $conn->query($sql);
      
      echo "<table border='1'>
      <tr>
      <th>Id</th>
      <th>First Name</th>
      <th>Mobile</th>
      <th>email</th>
      </tr>";

 
      if ($result->num_rows > 0) 
      {

          // output data of each row
          while($row = $result->fetch_assoc()) 
          {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['firstname'] . "</td>";
              echo "<td>" . $row['phonenumber'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "</tr>";
          }
          echo "</table>";
      } 
      else 
      {
          echo "0 results";
      }

      $conn->close();
      ?>


  </body>
</html>


<!DOCTYPE html>
<html>
<body>

</body>
</html>