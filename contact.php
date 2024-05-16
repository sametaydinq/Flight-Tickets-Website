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
 

    <section class="message__box">
        <div class="section__container message__container">
            <h2 class="section__header">Send us a message</h2>
            <form class="message__form">
                <div class="form-group">
                    <input type="text" placeholder="Name" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Surname" />
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Location" />
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email Address" />
                </div>
                <div class="form-group">
                    <textarea placeholder="Your message"></textarea>
                </div>
                <button class="btn">Send</button>
            </form>
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
  </body>
</html>
