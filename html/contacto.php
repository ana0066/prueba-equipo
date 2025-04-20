<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="../css/contacto.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="../style.css" />
    
  </head>
  <body>

  <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="#">Distribuidora Lorenzo</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">Distribuidora Lorenzo</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                

                <ul class="nav-links">
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../nosotros.php">Nosotros</a></li>
                    <li><a href="../html/productos.php">Productos</a></li>
                    <li><a href="../html/contacto.php">Contacto</a></li>
                    
                    
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>

                    <div class="search-field">
                        <input type="text" placeholder="Buscar...">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
                <div class="cart-icon">
                <i class='bx bxs-cart onclick="toggleCart()"'></i>
                <span id="cart-count">0</span>
            </div>
            </div>
            <div class="account-shopping">

            <div class="user">
                    <?php 
                        if (isset($_SESSION['usuario'])) {
                            echo "<a class='searchToggle logoutBtn' id='logoutBtn' href='php/logout.php'><i class='bx bx-log-out'></i></a>";
                            echo "<span class='username'>" . $_SESSION['usuario'] . "</span>";
                        } else {
                            echo "<a class='searchToggle' href='php/login.php'><i class='bx bx-user'></i></a>";
                        }
                    ?>
                </div>
            </div>
        </div>
        
    </nav>

    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Pongámonos en contacto</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Santiago- La Ceibita, Santiago de los Caballeros 51000</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p> +1 (829) 653-0243</p>
            </div>
          </div>

          <div class="social-media">
            <p>Conecta con nosotros:</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contactanos</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Nombre de Usuario</label>
              <span>Nombre de Usuario</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Correo electrónico</label>
              <span>Dirección de correo electrónico<</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Número de teléfono</label>
              <span>Número de teléfono</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Mensaje</label>
              <span>Mensaje</span>
            </div>
            <input type="submit" value="Enviar" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="img/LOGO.png" alt="Distribuidora/Lorenzo">
                    </a>
                </figure>
            </div>
            <div class="box">
                <b><h2>MENÚ INFERIOR</h2>
                <p>Inicio</p>
                <p>Contactos</p>
                <p>Nosotros</p>
                <p>Políticas de la empresa</p>
                <p>Políticas de devolución</p>
            </b>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://www.facebook.com/distribuidoralorenzo00/" class="fa fa-facebook"><i class='bx bxl-facebook-circle' style='color:#ece0e0' ></i></a>
                    <a href="https://www.instagram.com/distribuidoralorenzo00?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="fa fa-instagram"><i class='bx bxl-instagram' style='color:#ece0e0'  ></i></a>
                    <a href="#" class="fa fa-twitter"><i class='bx bxl-twitter'></i></a>
                
                </div>
                 </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.7775665097614!2d-70.6877119476317!3d19.4076411519626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf63e9c85b9b%3A0x7a4fbe5dc63a2545!2sDistribuidora%20Lorenzo!5e0!3m2!1ses!2sdo!4v1741976829787!5m2!1ses!2sdo" width="250" height="240" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
            </div>
        </div>
        
        <div class="grupo-2">
            <small>&copy; 2025 <b>Distribuidora Lorenzo</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>

    <script src="../js/contacto.js"></script>
    <script src="../script.js"></script>
  </body>
</html>