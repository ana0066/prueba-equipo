<?php
session_start();
?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Productos</title>

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../css/productos.css">
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
                    <li><a href="../index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="productos.php">Productos</a></li>
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

    <main>
        <div id="product-list">
            <?php
            $conn = new mysqli('localhost', 'root', '', 'distribuidoral');
            if ($conn->connect_error) {
                die('Error de conexión: ' . $conn->connect_error);
            }

            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='product'>
                            <img src='{$row['urlImagen']}' alt='{$row['nombre']}'>
                            <h3>{$row['nombre']}</h3>
                            <p>En stock: {$row['existencia']}</p>
                            <p>Precio: $ {$row['valor']}</p>
                            <button onclick='agregarAlCarrito({$row['id']}, \"{$row['nombre']}\", {$row['valor']}, \"{$row['urlImagen']}\")'>Agregar al Carrito</button>
                          </div>";
                }
            }
            $conn->close();
            ?>
        </div>
    </main>

    <aside id="cart">
        <span class="close-btn" onclick="toggleCart()">&times;</span>
        <h2>Carrito de Compras</h2>
        <div id="cart-items"></div>
        <div id="cart-total">Total: $0</div>
        <button onclick="finalizarPago()">Finalizar Pago</button>
    </aside> 

    <script src="../carrito.js"></script>
    <script src="../script.js"></script>

</body>
</head>

<body>
<!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="../img/LOGO.png" alt="Distribuidora/Lorenzo">
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
