<?php


include('db_connect.php');
global $conn;


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta htto-equiv="X-UA-Compatible" content="UE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Flight Ticket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>



  <body>
    <nav>
      <div class="nav__logo">FS</div>
      <ul class="nav__links">
      <li class="link"><a href="index.php">Home</a></li>
        <li class="link"><a href="flight.php">Flights</a></li>
        <li class="link"><a href="about.php">About</a></li>
      </ul>
      <a href="contact.php" class="btn">Contact</a>
    </nav>


    <body>
        <div class="container my-5">
            <h2>List of Flights</h2>
            <a class="btn btn-primary" href="create.php" role="button">New Flight</a>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Flight</th>
                        <th>From</th>
                        <th>Too</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    $sql = "SELECT * FROM ucus_listesi";
                    $result = $conn->query($sql);

                    if(!$result){
                        die("Invalid query:" . $conn->connection_error);
                    }

                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                        <td>$row[Flight_Code]</td>
                        <td>$row[Fromm]</td>
                        <td>$row[Too]</td>
                        <td>$row[Flight_Date]</td>
                        <td>$row[Flight_Time]</td>
                        <td>$row[Price]</td>
                        

                        <td>
                            <a class='btn btn-primary btn-sm' href='/test/edit.php?Flight_Code=$row[Flight_Code]'>Edit</a>
                            <a clas='btn btn-danger btn-sm' href='/test/delete.php?Flight_Code=$row[Flight_Code]'>Delete</a>

                        </td>

                    </tr>
                        ";
                    }

                    ?>
                   
                </tbody>
            </table>
        </div>
    </body>







   
    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h3>FS</h3>
          <p>
            We will enable you to arrange your flight route in the cheapest and fastest way.
          </p>
          <p>
            From friendly smiles to state-of-the-art aircraft, we connect the
            world, ensuring safe, comfortable, and unforgettable experiences.
          </p>
        </div>
        <div class="footer__col">
          <h4>INFORMATION</h4>
          <p>Home</p>
          <p>About</p>
        </div>
        <div class="footer__col">
          <h4>CONTACT</h4>
          <p>Support</p>
        </div>
      </div>
      <div class="section__container footer__bar">
        <p>Copyright © 2023 FS Company. All rights reserved.</p>
        </div>
    </footer>

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
