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