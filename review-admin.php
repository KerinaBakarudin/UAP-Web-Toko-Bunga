<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating & Review</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
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

        .review {
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .heading {
            margin-bottom: 30px;
            font-size: 36px;
            color: #333;
            align-self: center;
        }

        .heading span {
            color: #db7093;
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            gap: 48px;
            justify-content: center;
        }

        .box {
            flex: 1 1 300px;
            max-width: 300px;
            background: #fff;
            box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 24px;
            position: relative;
            box-sizing: border-box;
        }

        .box .fa-quote-right {
            position: absolute;
            bottom: 24px;
            right: 24px;
            font-size: 48px;
            color: #eee;
        }

        .stars {
            margin-bottom: 16px;
        }

        .stars i {
            color: #f39c12;
            font-size: 20px;
        }

        .box p {
            color: #777;
            font-size: 16px;
            margin: 16px 0;
        }

        .user {
            display: flex;
            align-items: center;
            margin-top: 16px;
        }

        .user img {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 16px;
        }

        .user-info h3 {
            font-size: 18px;
            color: #333;
            margin: 0;
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
                        <a class="nav-link" href="products-admin.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order-admin.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Review</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <i class="fa-solid fa-user" style="color: white"></i>
                    Hi, Flover
                </span>
            </div>
        </div>
    </nav>

    <div class="review">
        <h1 class="heading">Flover's <span>Review</span></h1>

        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Asperiores Sint Corporis Voluptate Non Error Obcaecati Adipisci A Autem?</p>
                <div class="user">
                    <img src="https://via.placeholder.com/50" alt="User Image">
                    <div class="user-info">
                        <h3>Anin</h3>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Asperiores Sint Corporis Voluptate Non Error Obcaecati Adipisci A Autem?</p>
                <div class="user">
                    <img src="https://via.placeholder.com/50" alt="User Image">
                    <div class="user-info">
                        <h3>Devina</h3>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Asperiores Sint Corporis Voluptate Non Error Obcaecati Adipisci A Autem?</p>
                <div class="user">
                    <img src="https://via.placeholder.com/50" alt="User Image">
                    <div class="user-info">
                        <h3>Kerina</h3>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz1mx3wcxA7xoa9r+r+NGH/tAIm9xOXt3I3gzTACEB1Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ho+pP2FYDWkFfSAOf3p+HBOtxvEE4j23xLsZgN5eCAqBOB6Yk8BNZZAZgQw1T2KC" crossorigin="anonymous"></script>
</body>
</html>
