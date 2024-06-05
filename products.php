<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
    <title>Products</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            background: ;
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
        }

        .navbar-nav .nav-link.active {
            color: white;
            font-size: 20px;
        }

        .navbar-text i{
            font-size: 20px;
            margin-right: 10px;
        }

        .product-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            height: 100%;
        }

        .product-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .product-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 16px;
            color: #666;
        }

        .row > .col-md-4 {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Floriest</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Products</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Order</a>
            </li>
        </ul>
        <span class="navbar-text">
            <i class="fa-solid fa-user" style="color: white"></i>
            Hi, Flover
        </span>
        </div>
    </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="product-card">
                    <img src="assets/flower1.png" alt="Flower 1" class="product-image">
                    <h2 class="product-title">Rose</h2>
                    <p class="product-price">$20.00</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="assets/flower2.png" alt="Flower 2" class="product-image">
                    <h2 class="product-title">Lily</h2>
                    <p class="product-price">$18.00</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="flower3.jpg" alt="Flower 3" class="product-image">
                    <h2 class="product-title">Sunflower</h2>
                    <p class="product-price">$15.00</p>
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="product-card">
                    <img src="assets/flower4.png" alt="Flower 1" class="product-image">
                    <h2 class="product-title">Rose</h2>
                    <p class="product-price">$20.00</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="assets/flower5.png" alt="Flower 2" class="product-image">
                    <h2 class="product-title">Lily</h2>
                    <p class="product-price">$18.00</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="flower6.jpg" alt="Flower 3" class="product-image">
                    <h2 class="product-title">Sunflower</h2>
                    <p class="product-price">$15.00</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
