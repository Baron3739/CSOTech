<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Responsive dropdown menu - Bedimcode</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header">
      <nav class="nav container">
        <div class="nav__data">
          <a href="index.php" class="nav__logo">
            <i class="ri-planet-line"></i> CSOtech
          </a>

          <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line nav__burger"></i>
            <i class="ri-close-line nav__close"></i>
          </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li><a href="#" class="nav__link">Home</a></li>

            <!--=============== DROPDOWN 1 ===============-->
            <li class="dropdown__item">
              <div class="nav__link">
                About Us <i class="ri-arrow-down-s-line dropdown__arrow"></i>
              </div>

              <ul class="dropdown__menu">
                <li>
                  <a href="#" class="dropdown__link">
                    <i class="ri-pie-chart-line"></i> About2
                  </a>
                </li>
                <li>
                  <a href="#" class="dropdown__link">
                    <i class="ri-pie-chart-line"></i> About3
                  </a>
                </li>

                <li>
                  <a href="#" class="dropdown__link">
                    <i class="ri-arrow-up-down-line"></i> about4
                  </a>
                </li>
              </ul>
            </li>

            <li><a href="#" class="nav__link">Blog</a></li>

            <!--=============== DROPDOWN 2 ===============-->
            <li class="dropdown__item">
              <div class="nav__link">
                Products <i class="ri-arrow-down-s-line dropdown__arrow"></i>
              </div>

              <ul class="dropdown__menu">
                <li>
                  <a href="#" class="dropdown__link">
                    <i class="ri-user-line"></i> Product2
                  </a>
                </li>

                <li>
                  <a href="#" class="dropdown__link">
                    <i class="ri-lock-line"></i> product3
                  </a>
                </li>

                <li>
                  <a href="#" class="dropdown__link">
                    <i class="ri-message-3-line"></i> product4
                  </a>
                </li>
              </ul>
            </li>

            <li><a href="#" class="nav__link">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>