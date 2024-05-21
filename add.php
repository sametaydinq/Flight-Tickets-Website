<?php

include('db_connect.php');
global $conn;


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Flight Ticket</title>
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
  
    
    <div class="container">
    <div class="col-md-6">

  <form action="" method="post">
    
    <table class="center-table">
        
        <tr>
            <td>Fromm</td>
            <td><input type="text" name="Fromm" class="form-control" ></td>
        </tr>

        <tr>
            <td>Too</td>
            <td><input name="Too" class="form-control" ></textarea></td>
        </tr>

        <tr>
            <td>Flight_Date</td>
            <td><input type="text" name="Flight_Date" class="form-control" ></td>
        </tr>

        <tr>
            <td>Flight_Time</td>
            <td><input type="text" name="Flight_Time" class="form-control" ></td>
        </tr>
        
        <tr>
            <td>Price</td>
            <td><input type="text" name="Price" class="form-control" ></td>
        </tr>

        
        <tr>
            <td>Flight_Code</td>
            <td><input type="text" name="Flight_Code" class="form-control" ></td>
        </tr>

        <tr>
            <td></td>
            <td><input class="btn btn-primary"  type="submit" value="Ekle"></td>
        </tr>

    </table>

</form>
</section>


   
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
  </body>
</html>


<?php

  if($_POST){
      //post durumu kontrolü sonrası değerleri değişkenlere atıyoruz
    $Fromm = $_POST['Fromm'];
    $Too = $_POST['Too'];
    $Flight_Date = $_POST['Flight_Date'];
    $Flight_Time = $_POST['Flight_Time'];
    $Price = $_POST['Price'];
    $Flight_Code = $_POST['Flight_Code'];


    //veri ekleme sorgumuzu çalıştırıyoruz

    if ($conn->query("INSERT INTO ucus_listesi(Fromm,
    Too,Flight_Date,Flight_Time,Price,Flight_Code) 
                VALUES ('$Fromm','$Too','$Flight_Date',
                '$Flight_Time','$Price','$Flight_Code')"))
        {
            echo "Veri Eklendi"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
        }
        else
        {
            echo "Hata oluştu";
        }


  }

?>
