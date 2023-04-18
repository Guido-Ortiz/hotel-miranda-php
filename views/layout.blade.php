<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./css/style.css">
      
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      
      <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
      <title>Hotel Miranda</title>
  </head>

  <body>

      <!-- NAVBAR -->
      <nav>
          <span class="material-symbols-outlined menu" id="menu">menu</span>
          <span class="material-symbols-outlined close menu" id="close">close</span>
          <div class="navbar--container">
              <a class="navbar--header" href="index.html">
                  <div class="logo">
                      <img src="./resources/H.png" alt="Logo Hotel Miranda" />
                  </div>
                  <img src="./resources/Hotel Miranda.png" alt="Hotel Miranda" class="navbar--title" />
              </a>

              <a href="about.html">
                  <h3 class="menu--desktop">About us</h3>
              </a>
              <a href="rooms.html">
                  <h3 class="menu--desktop">Rooms</h3>
              </a>
              <a href="offers.html">
                  <h3 class="menu--desktop">Offers</h3>
              </a>
              <a href="contact.html">
                  <h3 class="menu--desktop">Contact</h3>
              </a>


              <div class="navbar--icons">
                  <span class="material-symbols-outlined group">group</span>
                  <span class="material-symbols-outlined">search</span>
              </div>
          </div>
      </nav>
      <div class="menu--mobile" id="menu--items">
          <ul>
              <li>
                  <a href="about.html">
                      <h3 class="menu--item">About us</h3>
                  </a>
              </li>
              <li>
                  <a href="rooms.html">
                      <h3 class="menu--item">Rooms</h3>
                  </a>
              </li>
              <li>
                  <a href="offers.html">
                      <h3 class="menu--item">Offers</h3>
                  </a>
              </li>
              <li>
                  <a href="contact.html">
                      <h3 class="menu--item">Contact</h3>
                  </a>
              </li>
          </ul>
      </div>

      <main>
        @yield('content')
      </main>

      <footer>
          <div class="footer--header">
              <div>
                  H
              </div>
              <img src="./resources/Hotel Miranda.png" alt="Hotel Miranda" />
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus optio dolores eveniet inventore, fugiat
              iure tempora dolorum, culpa iste fugit alias quaerat quidem possimus aliquam reprehenderit ex quisquam hic
              aut!</p>
          <div class="footer--icons">
              <img src="./resources/footer/fb.png" alt="FB" />
              <img src="./resources/footer/bg_image.png" alt="BE" />
              <img src="./resources/footer/linkedin.png" alt="Linkedin" />
              <img src="./resources/footer/youtube.png" alt="Youtube" />
          </div>
          <div class="footer--services">
              <h2>Services</h2>
              <div>
                  <h5>+ Services</h5>
                  <h5>+ Services</h5>
                  <h5>+ Services</h5>
                  <h5>+ Services</h5>
                  <h5>+ Services</h5>
                  <h5>+ Services</h5>
              </div>
          </div>
          <div class="footer--contact">
              <h3>Contact us</h3>
              <div class="footer--container">
                  <img src="./resources/footer/phone.png" alt="Phone" />
                  <div class="footer--info">
                      <h4>Phone number</h4>
                      <h6>+ 987876 765 76 577</h6>
                  </div>
              </div>
              <div class="footer--container">
                  <img src="./resources/footer/email.png" alt="Email" />
                  <div class="footer--info">
                      <h4>Email</h4>
                      <h6>contact@hotelmiranda.com</h6>
                  </div>
              </div>
          </div>       
      </footer>
      <div class="footer--copyright">
          <h4>Copyright By@Example - 2020</h4>
          <h5>Terms of use | Privacy Enviromental Policy</h5>
      </div>

      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
          var swiper = new Swiper(".mySwip", {
              navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
              },
          });
      </script>

      <script>
          var swiper = new Swiper(".mySwiper", {
              pagination: {
                  el: ".swiper-pagination",
              },
          });
      </script>


  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwipers", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

  </body>
  <script src="./js/navbar/navbar.js"></script>
  <script src="./js/foods_menu/foods_menu.js"></script>
</html>