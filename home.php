<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
    <title>Document</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            background: ;
            background-size: cover;
        }

        .home {
            display: flex;
            align-items: center;
            min-height: 100vh;
            margin-left: 30px;
        }

        .section{
            padding: 30px;
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
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
    
    <section class="home">
        <div class="content">
            <h3>Fresh Flowers</h3>
            <span>flower rawr</span>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error, quas dolores vitae est odio facilis aut optio quo hic, quasi doloribus quis quod soluta laudantium dignissimos, eum veritatis? Omnis, dolor?</p>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>