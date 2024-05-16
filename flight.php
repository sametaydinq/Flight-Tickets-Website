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
  
   
    <section class="section__container booking__container">
        <div class="booking__nav">
          <span>Economy Class</span>
          <span>Business Class</span>
          <span>First Class</span>
        </div>
        <form>
          <div class="form__group">
            <span><i class="ri-map-pin-line"></i></span>
            <div class="input__content">
              <div class="input__group">
                <input type="text" />
                <label>Location</label>
              </div>
              <p>Where are you goung?</p>
            </div>
          </div>
          <div class="form__group">
            <span><i class="ri-user-3-line"></i></span>
            <div class="input__content">
              <div class="input__group">
                <input type="number" />
                <label>Travellers</label>
              </div>
              <p>Add guests</p>
            </div>
          </div>
          <div class="form__group">
            <span><i class="ri-calendar-line"></i></span>
            <div class="input__content">
              <div class="input__group">
                <input type="text" />
                <label>Departure</label>
              </div>
              <p>Add date</p>
            </div>
          </div>
          <div class="form__group">
            <span><i class="ri-calendar-line"></i></span>
            <div class="input__content">
              <div class="input__group">
                <input type="text" />
                <label>Return</label>
              </div>
              <p>Add date</p>
            </div>
          </div>
          <button class="btn"><i class="ri-search-line"></i></button>
        </form>
      </section>

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
  </body>
</html>
