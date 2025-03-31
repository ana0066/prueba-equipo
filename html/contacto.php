<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website with a contact Form 01</title>
    <link rel="stylesheet" href="../css/contacto.css">
    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="../style.css">
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
                    <li><a href="#">Nosotros</a></li>
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
    
    <div class="content">

        <h1 class="logo">Contactanos <span></span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Contactanos</h3>
                <form action="">
                    <p>
                        <label>FullName</label>
                        <input type="text" name="fullname">
                    </p>
                    <p>
                        <label>Email Adress</label>
                        <input type="email" name="email">
                    </p>
                    <p>
                        <label>Phone Number</label>
                        <input type="tel" name="phone">
                    </p>
                    <p>
                        <label>Affair</label>
                        <input type="text" name="affair">
                    </p>
                    <p class="block">
                       <label>Message</label> 
                        <textarea name="message" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button>
                            Send
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>More Info</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Baker Street</li>
                    <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
                    <li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
                </ul>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
                <p>Company.com</p>
            </div>
        </div>

    </div>

</body>
</html>