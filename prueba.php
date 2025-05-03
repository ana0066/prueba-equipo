<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuidora Lorenzo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="prueba.css">
</head>
<body>
    <header>
        
    <div class="menu-toggle" id="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <h1>Distribuidora Lorenzo</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="html/nosotros.php">Nosotros</a></li>
                <li><a href="html/productos.php">Productos</a></li>
                <li><a href="html/contacto.php">Contacto</a></li>
            </ul>
        </nav>
        <div class="icons">
            <i class="fas fa-search"></i>
            <?php 
                        if (isset($_SESSION['usuario'])) {
                            echo "<a class='searchToggle logoutBtn' id='logoutBtn' href='../php/logout.php'><i class='fas fa-log-out'></i></a>";
                            echo "<span class='username'>" . $_SESSION['usuario'] . "</span>";
                        } else {
                            echo "<a class='searchToggle' href='php/login.php'><i class='fas fa-user'></i></a>";
                        }
                    ?>
            <i class="fas fa-shopping-cart" onclick="toggleCart()"></i>
            <span id="cart-count">0</span>
        </div>
    </header>

    <main class="products-container">
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

    <script>
        let carrito = {};

        function toggleCart() {
            const cart = document.getElementById('cart');
            cart.style.display = cart.style.display === 'none' ? 'block' : 'none';
        }

        function actualizarCarrito() {
            const cartItems = document.getElementById('cart-items');
            const cartTotal = document.getElementById('cart-total');
            cartItems.innerHTML = '';
            let totalItems = 0;
            let totalPrice = 0;

            for (let id in carrito) {
                const item = carrito[id];
                totalItems += item.cantidad;
                totalPrice += item.precio * item.cantidad;
                cartItems.innerHTML += `
                    <div class="cart-item">
                        <img src="${item.imagen}" alt="${item.nombre}">
                        <div>
                            <p>${item.nombre}</p>
                            <p>Precio: $ ${item.precio}</p>
                            <p>Cantidad: <input type="number" value="${item.cantidad}" min="0" onchange="cambiarCantidad(${id}, this.value)"></p>
                        </div>
                    </div>`;
            }

            document.getElementById('cart-count').innerText = totalItems;
            cartTotal.innerText = `Total: $${totalPrice}`;
        }

        function agregarAlCarrito(id, nombre, precio, imagen) {
            if (!carrito[id]) {
                carrito[id] = { nombre, precio, imagen, cantidad: 0 };
            }
            carrito[id].cantidad++;
            actualizarCarrito();
        }

        function cambiarCantidad(id, cantidad) {
            if (cantidad <= 0) {
                delete carrito[id];
            } else {
                carrito[id].cantidad = parseInt(cantidad);
            }
            actualizarCarrito();
        }

        function finalizarPago() {
            alert('Pago finalizado.');
            carrito = {};
            actualizarCarrito();
        }
    </script>
    <script src="script.js"></script>
</body>
</html>
