<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
    <title>Order</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f8f9fa;
            background-size: cover;
        }

        .container-fluid {
            background-color: pink;
            padding: 15px;
        }

        .navbar-brand {
            font-size: 30px;
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navbar-nav .nav-link.active {
            color: white;
            font-size: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navbar-text i {
            font-size: 20px;
            margin-right: 10px;
        }

        .navbar-text {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .container {
            padding: 20px;
        }

        .breadcrumb {
            margin-bottom: 20px;
        }

        .breadcrumb a {
            text-decoration: none;
            color: #000;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .shopping-bag {
            display: flex;
            justify-content: space-between;
        }

        .shopping-bag-items {
            width: 48%;
        }

        .shopping-bag-item img {
            width: 100px;
            height: auto;
        }

        .shopping-bag-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .shopping-bag-item-info {
            flex-grow: 1;
            margin-left: 20px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
        }

        .quantity-controls input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
        }

        .order-summary {
            width: 48%;
            border: 1px solid #ddd;
            padding: 20px;
        }

        .order-summary h2 {
            margin: 0 0 20px;
        }

        .order-summary div {
            margin-bottom: 10px;
        }

        .checkout-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #000;
            color: #fff;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
        }

        .checkout-btn:hover {
            background-color: #444;
        }

        .remove-btn {
            background: none;
            border: none;
            color: red;
            font-size: 1.2em;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Floriest</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products-cust.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="review-cust.php">Review</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <i class="fa-solid fa-user" style="color: white"></i>
                    Hi, Flover
                </span>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="shopping-bag">
            <div class="shopping-bag-items" id="shoppingBagItems">
                <div class="shopping-bag-item">
                    <img src="assets/flower1.png" alt="Rose">
                    <div class="shopping-bag-item-info">
                        <h3>Rose</h3>
                        <p>Harga: Rp <span class="price">100000</span></p>
                        <div class="quantity-controls">
                            <input type="number" value="1" min="1" class="quantity" data-price="100000">
                        </div>
                    </div>
                    <button class="remove-btn"><i class="fa fa-trash"></i></button>
                </div>
                <div class="shopping-bag-item">
                    <img src="assets/flower1.png" alt="Rose">
                    <div class="shopping-bag-item-info">
                        <h3>Rose</h3>
                        <p>Harga: Rp <span class="price">100000</span></p>
                        <div class="quantity-controls">
                            <input type="number" value="1" min="1" class="quantity" data-price="100000">
                        </div>
                    </div>
                    <button class="remove-btn"><i class="fa fa-trash"></i></button>
                </div>
            </div>
            <div class="order-summary">
                <h2>ORDER SUMMARY</h2>
                <div>Subtotal: Rp <span id="subtotal">200000</span></div>
                <div><strong>Estimated Total: Rp <span id="estimatedTotal">200000</span></strong></div>
                <a href="#" class="checkout-btn">CHECKOUT NOW</a>
            </div>
        </div>
    </div>

    <script>
        function updateSummary() {
            let subtotal = 0;
            document.querySelectorAll('.shopping-bag-item').forEach(item => {
                const price = parseInt(item.querySelector('.quantity').getAttribute('data-price'));
                const quantity = parseInt(item.querySelector('.quantity').value);
                subtotal += price * quantity;
            });
            document.getElementById('subtotal').textContent = subtotal;
            document.getElementById('estimatedTotal').textContent = subtotal;
        }

        document.querySelectorAll('.quantity').forEach(input => {
            input.addEventListener('input', updateSummary);
        });

        document.querySelectorAll('.remove-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.closest('.shopping-bag-item').remove();
                updateSummary();
            });
        });

        updateSummary();
    </script>
</body>
</html>
