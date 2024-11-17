<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blubites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#" style="color: #ff902a;">Blubites</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" >
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#menu">Menu</a>
                    <a class="nav-link" href="#about">About Us</a>
                    <a class="nav-link" href="#delivery">Delivery</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-hero text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Discover the Delight of Mochi & Ocean Blue Jelly</h1>
            <p class="lead">Experience the perfect blend of flavors and textures crafted just for you.</p>
            <a href="#menu" class="btn btn-warning mt-3 px-4 py-2 fw-bold">Explore Menu</a>
        </div>
    </section>

    <!-- Popular Now Section -->
    <div class="container py-5" id="menu">
        <h2 class="text-center mb-5 fw-bold">Popular <span style="color: #ff902a;">Now</span></h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <span class="rate position-absolute rounded-pill">4.8 <i class="fa fa-star"></i></span>
                    <img src="download.jpeg" class="card-img-top" alt="Mochi Cokelat">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5>Mochi Cokelat</h5>
                        <h5 class="price">21 k</h5>
                        <div class="add-cart">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <span class="rate position-absolute rounded-pill">4.8 <i class="fa fa-star"></i></span>
                    <img src="ocean.jpeg" class="card-img-top" alt="Ocean Blue Jelly">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5>Ocean Blue Jelly</h5>
                        <h5 class="price">12 k</h5>
                        <div class="add-cart">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <span class="rate position-absolute rounded-pill">4.8 <i class="fa fa-star"></i></span>
                    <img src="matha.jpeg" class="card-img-top" alt="Hazelnut Latte">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5>Mochi Matcha</h5>
                        <h5 class="price">23 k</h5>
                        <div class="add-cart">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mochi & Jelly Highlight -->
    <section class="bg-light py-5" id="about">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Why Mochi & Ocean Blue Jelly?</h2>
            <p class="lead">Mochi Cokelat offers a rich, chewy texture with a burst of chocolate, while Ocean Blue Jelly brings a refreshing and vibrant flavor to your day. Try them today and feel the magic!</p>
        </div>
    </section>

    <!-- Delivery Service Section -->
    <div class="container mt-5" id="delivery">
        <h2 class="py-5 text-center fw-bold">How to use our <span style="color: #ff902a;">delivery service</span></h2>
        <div class="row text-center mt-4">
            <div class="col-md-4">
                <img src="favorite.png" width="100px" height="100px" alt="Choose Coffee">
                <p class="fs-4 fw-bold">Choose Your Favorites</p>
                <p>From Mochi to refreshing Jelly, pick your best-loved treats.</p>
            </div>
            <div class="col-md-4">
                <img src="delivery.png" width="100px" height="100px" alt="Delivery">
                <p class="fs-4 fw-bold">We Deliver it to You</p>
                <p>Fast and secure delivery at your doorstep.</p>
            </div>
            <div class="col-md-4">
                <img src="enjoy.png" width="100px" height="100px" alt="Enjoy Coffee">
                <p class="fs-4 fw-bold">Enjoy the Magic</p>
                <p>Savor every bite and sip!</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>