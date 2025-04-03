<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link rel="stylesheet" href="./css/styles.css">
    <title>Error</title>
</head>
<body>
<header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="./images/ltt.png" alt="Logo" height="50" width="200">
            </a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="#" class="nav__link">Home</a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">Services</a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">Prices</a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">Contact Me</a>
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

<div class="search" id="search">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <a placeholder="Incorrect Password or Email?" class="search__input">
         </form>
         <i class="ri-close-line search__close" id="search-close"></i>
      </div>
<!--==================== MAIN ====================-->
<main class="main">
         <img src="./images/back.jpg" alt="image" class="main__bg">
      </main>
      
      <!--=============== MAIN JS ===============-->
      <script src="./js/main.js"></script>
   </body>
</html>