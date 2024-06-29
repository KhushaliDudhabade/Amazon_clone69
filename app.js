let cart = [];
let totalPrice = 0;

function addToCart(productName, price, image) {
    //get the qnty from input
    const quantityInput = event.target.previousElementSibling;
    const quantity = parseInt(quantityInput.value);

    // Check if the product is already in the cart
    const existingProductIndex = cart.findIndex(item => item.name === productName);
    if (existingProductIndex > -1) {
        // Update the quantity of the existing product
        cart[existingProductIndex].quantity += quantity;
    } else {
        // Add the new product to the cart
        cart.push({ name: productName, price: price, image: image, quantity: quantity });
    }

    // Update the total price
    totalPrice += price * quantity;

    // Update the cart display
    updateCartDisplay();
}

function updateCartDisplay() {
    // Get the cart items element
    const cartItems = document.getElementById('cartItems');

    // Clear the current cart items
    cartItems.innerHTML = '';

    // Add each item in the cart to the display
    cart.forEach(item => {
        const li = document.createElement('li');
        li.className = 'cart-item';
        
        const itemTotal = item.price * item.quantity;

        li.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <span>${item.name} - $${item.price} x ${item.quantity} : $${itemTotal}</span>
        `;
        
        cartItems.appendChild(li);
    });

    // Update the total price display
    document.getElementById('totalPrice').textContent = totalPrice;
}

function saveOrder() {
    
    localStorage.setItem('cart', JSON.stringify(cart));
    localStorage.setItem('totalPrice', totalPrice);

    // clear the cart and totalPrice after saving
    // cart = [];
    // totalPrice = 0;

   
    alert('Order saved! You can now proceed to checkout.');
}


function checkout() {
    
    saveOrder();
}