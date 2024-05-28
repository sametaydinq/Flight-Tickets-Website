
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
  
   
   

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Select Departure Airport </h4>
                    </div>
                    <div class="card-body text-align: center">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body d-flex justify-content-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>Too</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                  
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM ucus_listesi WHERE Fromm = '$filtervalues'";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Fromm']; ?></td>
                                                    <td><?= $items['Too']; ?></td>
                                                    <td><?= $items['Flight_Date']; ?></td>
                                                    <td><?= $items['Flight_Time']; ?></td>
                                                    <td><?= $items['Price']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



      <section class="section__container travellers__container">
        <h2 class="section__header">Best travellers of the month</h2>
        <div class="travellers__grid">
          <div class="travellers__card">
            <img src="assets/traveller-1.jpg" alt="traveller" />
            <div class="travellers__card__content">
              <img src="assets/client-1.jpg" alt="client" />
              <h4>Emily Johnson</h4>
              <p>Dubai</p>
            </div>
          </div>
          <div class="travellers__card">
            <img src="assets/traveller-2.jpg" alt="traveller" />
            <div class="travellers__card__content">
              <img src="assets/client-2.jpg" alt="client" />
              <h4>David Smith</h4>
              <p>Paris</p>
            </div>
          </div>
          <div class="travellers__card">
            <img src="assets/traveller-3.jpg" alt="traveller" />
            <div class="travellers__card__content">
              <img src="assets/client-3.jpg" alt="client" />
              <h4>Olivia Brown</h4>
              <p>Singapore</p>
            </div>
          </div>
          <div class="travellers__card">
            <img src="assets/traveller-4.jpg" alt="traveller" />
            <div class="travellers__card__content">
              <img src="assets/client-4.jpg" alt="client" />
              <h4>Daniel Taylor</h4>
              <p>Malaysia</p>
            </div>
          </div>
        </div>
      </section>
      
    <section class="subscribe">
      <div class="section__container subscribe__container">
        <h2 class="section__header">Subscribe newsletter & get latest news</h2>
        <form class="subscribe__form">
          <input type="text" placeholder="Enter your email here" />
          <button class="btn">Subscribe</button>
        </form>
      </div>
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

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
