<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout – Distribuidora Lorenzo</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../css/checkout.css">
  <link rel="stylesheet" href="../css/productos.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://www.paypal.com/sdk/js?client-id=AXUAVkqwfkvaeRrSB0AqHxi3aD8bVMnS6oOBucZteoPKfrSJ0FIKDuFlBGygkfqnNA5DRLl9ZBS902eo&buyer-country=US&currency=USD&components=buttons&enable-funding=venmo,paylater,card"></script>
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
                    <li><a href="../html/nosotros.php">Nosotros</a></li>
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
                <i class="bx bxs-cart"  onclick="toggleCart()"></i>
                <span id="cart-count">0</span>
            </div>
            </div>
            <div class="account-shopping">

            <div class="user">
                    <?php 
                        if (isset($_SESSION['usuario'])) {
                            echo "<a class='searchToggle logoutBtn' id='logoutBtn' href='../php/logout.php'><i class='bx bx-log-out'></i></a>";
                            echo "<span class='username'>" . $_SESSION['usuario'] . "</span>";
                        } else {
                            echo "<a class='searchToggle' href='../php/login.php'><i class='bx bx-user'></i></a>";
                        }
                    ?>
                </div>
            </div>
        </div>
        
</nav>
  
<main class="checkout-container">
    <h2>Resumen de tu pedido</h2>
    <div class="checkoutContainer" id="checkoutContainer"></div>

    <!-- Contenedor para el botón de PayPal -->
    <div id="paypal-button-container"></div>
</main>

<div id="cartModal" class="cart-modal">
        <h2>Tu carrito</h2>
        <div id="cartItems"></div>
        <div class="cart-footer">
            <p>Total artículos: <span id="cart-count">0</span></p>
            <a href="checkout.php" class="button">Ir a Checkout</a>
        </div>
    </div>


  <footer class="pie-pagina">
      <div class="grupo-1">
        <div class="box">
          <figure>
            <a href="#">
              <img src="../img/LOGO.png" alt="Distribuidora Lorenzo" />
            </a>
          </figure>
        </div>
        <div class="box">
          <h2>MENÚ INFERIOR</h2>
          <p><a href="../index.php">Inicio</a></p>
          <p><a href="../html/contacto.php">Contactos</a></p>
          <p><a href="../html/nosotros.php">Nosotros</a></p>
          <p>Políticas de la empresa</p>
          <p>Políticas de devolución</p>
        </div>
        <div class="box">
          <h2>SÍGUENOS</h2>
          <div class="red-social">
            <a href="https://www.facebook.com/distribuidoralorenzo00/" class="fa fa-facebook">
              <i class="bx bxl-facebook-circle" style="color:#ece0e0"></i>
            </a>
            <a href="#" class="fa fa-instagram">
              <i class="bx bxl-instagram" style="color:#ece0e0"></i>
            </a>
            <a href="#" class="fa fa-twitter">
              <i class="bx bxl-twitter"></i>
            </a>
          </div>
        </div>
        <div class="mapa">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.7775665097614!2d-70.6877119476317!3d19.4076411519626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf63e9c85b9b%3A0x7a4fbe5dc63a2545!2sDistribuidora%20Lorenzo!5e0!3m2!1ses!2sdo!4v1741976829787!5m2!1ses!2sdo"
            width="250"
            height="240"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
      <div class="grupo-2">
        <small>&copy; 2025 <b>Distribuidora Lorenzo</b> - Todos los Derechos Reservados.</small>
      </div>
    </footer>
  
  <script src="../carrito.js"></script>   
  <script src="../js/checkout.js"></script>
  <script src="../carrito.js?v=2"></script>
    <script src="../productos.js?v=2"></script>
</body>
</html>
