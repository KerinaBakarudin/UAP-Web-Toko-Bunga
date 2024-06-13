<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
    <title>Order Now</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Roboto', sans-serif;
            color: #fff;
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

        .hero {
            position: relative;
            height: 100%;
            background: url('assets/pict3.png') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .content {
            position: relative;
            z-index: 2;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        p {
            font-size: 20px;
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
        }
        .button-container button {
            background-color: transparent;
            color: #fff;
            border: 2px solid #fff;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }
        .button-container button:hover {
            background-color: #E37383;
            border-color: #E37383;
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

    <div class="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1>GO GET YOUR BOUQUET</h1>
            <p>You know you deserve it</p>
            <div class="button-container">
                <button onclick="window.location.href='formbook.php'">ORDER NOW</button>
            </div>
        </div>
    </div>
</body>
</html>
