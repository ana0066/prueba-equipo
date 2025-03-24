
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    

    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Distribuidora Lorenzo</title>
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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Productos</a></li>
                    <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'admin'): ?>
            <li><a href="admin.php">Administrar</a></li>
        <?php endif; ?>
                    <li><a href="#">Contacto</a></li>
                    
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

                <div class="profile-icon">
                    <a href="php/login.php">
                        <i class='bx bx-user'></i>
                    </a>
                </div>
            </div>
        </div>
        
    </nav>

    <script src="script.js"></script>

</body>

<!--SLIDER-->

    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="img/platoss.jpeg" alt="" class="image" />
          <div class="image-data">
            <span class="text">Al gusto</span>
            <h2>
                Nuestra Variedades <br />
              de platos
            </h2>
            <a href="#" class="button">Mas informacion</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="img/2.jpeg" alt="" class="image" />
          <div class="image-data">
            <span class="text">Al gusto</span>
            <h2>
                Nuestra Variedades<br />
              Eletronicos
            </h2>
            <a href="#" class="button">Mas informacion</a>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="img/cosisna.jpeg" alt="" class="image" />
          <div class="image-data">
            <span class="text">Cocina</span>
            <h2>
                Nuestra Variedades<br />
                 para el hogar 
              
            </h2>
            <a href="#" class="button">Mas informacion </a>
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variedades del Hogar</title>

</head>
<body>
<br>
<br>
    <h2>DISFRUTA DE TODAS NUESTRAS VARIEDADES</h2>
    
    <div class="contenedor">
        <div class="categoria">
            <img src="img/Mobiliarida.jpeg" alt="Mobiliaria">
            <p>MOBILIARIA</p>
        </div>
        <div class="categoria">
            <img src="img/PRODUCTOS PARA EL HOGAR.jpeg" alt="Productos para el hogar">
            <p>PRODUCTOS PARA EL HOGAR</p>
        </div>
        <div class="categoria">
            <img src="img/Decoracion de hogar.jpeg" alt="Decoraciones para el hogar">
            <p>DECORACIONES PARA EL HOGAR</p>
        </div>
        <div class="categoria">
            <img src="img/eletrodomestico.jpeg" alt="Electrodomésticos">
            <p>ELECTRODOMÉSTICOS</p>
        </div>
        <div class="categoria">
            <img src="img/vaji.jpeg" alt="Vajillas">
            <p>VAJILLAS</p>
        </div>
    </div>
    <br>
    <br>

   
    
  
    
        <div class="banner">
            <p>VIVE LA EXPERIENCIA COMPLETA EN DISTRIBUIDORA LORENZO 🗨️</p>
        </div>
    
        <div class="comentarios">
            <div class="comentario">
                <p class="nombre">DENCEL LAJARA</p>
                <p>Muy mala, no me llegó el biurí que quería.</p>
                <h1><div class="estrellas">★★★★☆</div></h1>
            </div>
    
            <div class="comentario">
                <p class="nombre">CASIMIRA LÓPEZ</p>
                <p>Buenas</p>
                <div class="estrellas">★★★★★</div>
                
                
            </div>
    
            <div class="comentario">
                <p class="nombre">SELENA QUINTANILLA</p>
                <p>Siempre hay nuevas opciones y una gran variedad para elegir, los precios son muy accesibles también.</p>
                <div class="estrellas">★★★★☆</div>
                
                
            </div>
        </div>
    
<br>
<br>
<br>
     <!--Iconos-->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
</head>
<body>
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
                    <a href="#" class="fa fa-instagram"><i class='bx bxl-instagram' style='color:#ece0e0'  ></i></a>
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
</body>
</html>
  </body>
</html>
