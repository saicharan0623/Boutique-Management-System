<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRICE LIST</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link rel="stylesheet" href="../css/styles.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

      <link href="../lib/animate/animate.min.css" rel="stylesheet">
      <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
      <link href="../lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
      <link href="../css/stylehero.css" rel="stylesheet">
      <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="../images/ltt.png" alt="Logo" height="50" width="200">
            </a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="../index.html" class="nav__link">Home</a>
                  </li>

                  <li class="nav__item">
                     <a href="services.php" class="nav__link">Services</a>
                  </li>

                  <li class="nav__item">
                     <a href="prices.php" class="nav__link">Prices</a>
                  </li>

                  <li class="nav__item">
                     <a href="Contact_us.php" class="nav__link">Contact Me</a>
                  </li>
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__actions">
               <!-- Search button -->
               <i class="ri-search-line nav__search" id="search-btn"></i>

               <!-- Login button -->
               <i class="ri-user-line nav__login" id="login-btn"></i>

               <!-- Toggle button -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line"></i>
               </div>
            </div>
         </nav>
      </header>

      <!--==================== SEARCH ====================-->
      <div class="search" id="search">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>

      <!--==================== LOGIN ====================-->
      <div class="login" id="login">
         <form action="./php/login.php" class="login__form" method="post">
            <h2 class="login__title">Log In</h2>
            
            <div class="login__group">
               <div>
                  <label for="email" class="login__label">Email</label>
                  <input type="email" placeholder="Write your email" id="email" class="login__input"  name="email">
               </div>
               
               <div>
                  <label for="password" class="login__label">Password</label>
                  <input type="password" placeholder="Enter your password" id="password" class="login__input" name="password">
               </div>
            </div>

            <div>
   
               <a href="#" class="login__forgot">
                  You forgot your password
               </a>
   
               <button type="submit" class="login__button">Log In</button>
            </div>
         </form>

         <i class="ri-close-line login__close" id="login-close"></i>
      </div>
      <footer class="footer bg-secondary text-white py-5">
   <div class="container">
       <div class="row">
           <div class="col-md-6">
               <h3>Contact Us</h3>
               <form action="#" method="POST">
                   <div class="form-group mb-3">
                       <input type="text" class="form-control" placeholder="Your Name" required>
                   </div>
                   <div class="form-group mb-3">
                       <input type="email" class="form-control" placeholder="Your Mobile NUmber" required>
                   </div>
                   <div class="form-group mb-3">
                       <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                   </div>
                   <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Send Message</button>
               </form>
           </div>
           <div class="col-md-3">
               <h3>Quick Links</h3>
               <ul class="list-unstyled">
                   <li><a href="#">Home</a></li>
                   <li><a href="#">Services</a></li>
                   <li><a href="#">Prices</a></li>
                   <li><a href="#">Contact</a></li>
               </ul>
           </div>
           <div class="col-md-3">
               <h3>Contact Info</h3>
               <p>Email: lathatailor@gmail.com</p>
               <p>Phone: +916304856382</p>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12 text-center mt-4">
               <p>&copy; 2024 Latha Tailor's. All Rights Reserved.</p>
           </div>
       </div>
   </div>
</footer>
<script src="../js/main.js"></script>
</body>
</html>
