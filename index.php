<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">





    <link rel="stylesheet" href="assets/css/style.css">



</head>

<body>

    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img class="logo" src="assets/imgs/logo.png" alt="">
            </a>
            <h2 class="brand">mays</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
                        <a href="account.html"><i class="fa-solid fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- home -->
    <section id="home">
        <div class="container">
            <h5>NEW ARRIVELS</h5>
            <h1><span>Best Prices</span> This Season</h1>
            <p>Eshop offers the best products for the most affordable prices</p>
            <button>Shop Now</button>
        </div>
    </section>




    <!-- brands -->
    <section id="brand" class="container">
        <div class="row">
            <img src="assets/imgs/abuLaila.jpeg" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">

            <img src="assets/imgs/bAndF.jpeg" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">

            <img src="assets/imgs/daraghmeh.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">

            <img src="assets/imgs/sheChocolate.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">

        </div>
    </section>


    <!-- new -->
    <section id="new" class="w-100">
        <div class="row m-0">
            <!-- one -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-3">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid">
                <div class="details  p-3">
                    <h2>Extremely Awesome Shoes</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>

            <!-- two -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-3">
                <img src="assets/imgs/bag.jpeg" alt="" class="img-fluid">
                <div class="details">
                    <h2>Awesome Jacket</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>

            <!-- three -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-3">
                <img src="assets/imgs/watch.jpeg" alt="" class="img-fluid">
                <div class="details  p-3">
                    <h2>50% OFF Watches</h2>
                    <button class="text-uppercase">Shop Now</button>
                </div>
            </div>
        </div>
    </section>



    <!-- featured -->
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Our Featured</h3>
            <hr class="mx-auto">
            <p>Here you can check out our featured products</p>
        </div>
        <div class="row mx-auto container-fluid">

            <?php include('server/get_featured_products.php'); ?>


            <?php while($row = $featured_products -> fetch_assoc()){

       ?>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/<?php echo $row['product_image']; ?>" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
                <h4 class="p-price"><?php echo $row['product_price']; ?> JOD</h4>

                <a href="<?php echo 'single_product.php?product_id=' . $row['product_id']; ?>"> 
    <button class="but-btn">Buy Now</button>
</a>

            </div>

            <?php } ?>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
        </div>
    </section>


    <!-- banner -->
    <section id="banner" class="my-5 py-5">
        <div class="container">
            <h4>MID SEASON'S SALE</h4>
            <h1>Autumn Collection <br> Up to 30% OFF </h1>
            <button class="text-uppercase">shop now</button>
        </div>
    </section>



    <!-- clothes -->
    <section id="featured" class="my-5 ">
        <div class="container text-center mt-5 py-5">
            <h3>Dresses & Coats</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing clothes</p>
        </div>
        <div class="row mx-auto container-fluid">

            <?php include('server/get_coats.php'); ?>


            <?php while($row = $coats_products -> fetch_assoc()){
        ?>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/<?= $row['product_image']?>" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?= $row['product_name']?></h5>
                <h4 class="p-price"><?= $row['product_price']?> JOD</h4>
                <a href="<?php echo 'single_product.php?product_id=' . $row['product_id']; ?>"> 
    <button class="but-btn">Buy Now</button>
</a>


            </div>
            <?php } ?>


            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
        </div>
    </section>



    <!-- watches -->
    <section id="watches" class="my-5 ">
        <div class="container text-center mt-5 py-5">
            <h3>Best Watches</h3>
            <hr class="mx-auto">
            <p>Check out our unique watches</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
        </div>
    </section>



    <!-- shoes -->
    <section id="shoes" class="my-5 ">
        <div class="container text-center mt-5 py-5">
            <h3>Shoes</h3>
            <hr class="mx-auto">
            <p>Here you can check out our amazing shoes</p>
        </div>
        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="assets/imgs/shoes.jpeg" alt="" class="img-fluid mb-3">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Sports Shoes</h5>
                <h4 class="p-price">30 JOD</h4>

                <button class="but-btn">Buy Now</button>
            </div>
        </div>
    </section>



    <!-- footer -->
    <footer class="mt-5 py-5">
        <div class="row container mx-auto pt-5">
            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <img class="logo" src="assets/imgs/logo.png" alt="">
                <p class="pt-3">We provide the best products for the most affordable prices.</p>
            </div>

            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Featured</h5>
                <ul class="text-uppercase">
                    <li><a href="#">men</a></li>
                    <li><a href="#">women</a></li>
                    <li><a href="#">boys</a></li>
                    <li><a href="#">girls</a></li>
                    <li><a href="#">new arrivals</a></li>
                    <li><a href="#">clothes</a></li>
                </ul>
            </div>

            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Contact Us</h5>
                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>Street, Amman</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>+962 776 506 379</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Email</h6>
                    <p>maysalkhalil02@gmail.com</p>
                </div>
            </div>

            <div class="footer-one col-lg-3 col-md-6 col-sm-12">
                <h5 class="pb-2">Instagram</h5>
                <div class="row">
                    <img src="assets/imgs/abuLaila.jpeg" class="img-fluid w-25 h-100" alt="">
                    <img src="assets/imgs/daraghmeh.png" class="img-fluid w-25 h-100" alt="">
                    <img src="assets/imgs/sheChocolate.png" class="img-fluid w-25 h-100" alt="">
                    <img src="assets/imgs/bAndF.jpeg" class="img-fluid w-25 h-100" alt="">
                </div>
            </div>

        </div>


        <div class="copyright mt-5">
            <div class="row container mx-auto d-flex align-items-center justify-content-between">

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <img src="assets/imgs/payment.png" alt="payment">
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 text-nowrap">
                    <p> 2024 All rights reserved | Design by @Mays Alkhalil</p>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 d-flex align-items-center ">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>

            </div>
        </div>

    </footer>

    </main>

















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>