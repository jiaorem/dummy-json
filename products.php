<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

$response = $client->get('products');
$code = $response->getStatusCode();
$body = $response->getBody();
$products = json_decode($body) -> products;
?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dummy Json</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel-rtl/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!-- Custom styles for this template -->
    <link href="../carousel/carousel.rtl.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cart</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="products.php"> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled"></a>
          </li>
        </ul>
        <form action="search-products.php" method="POST">
            <input type="text" placeholder="Search for a product" name="product_name">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>
<div>
    <div class="container py-5">
        <div class="row text-center text-white mb-5">
            <div class="col-lg-7 mx-auto">
                <h1 class="display-4" style="color:black" >Product List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow">
                    <!-- list group item-->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <?php foreach ($products as $product){ ?>
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                          <p class="font-italic text-muted mb-0 small"><?php echo $product->id?></p>
                            <h5 class="mt-0 font-weight-bold mb-2"><?php echo $product->title?></h5>
                            <p class="font-italic text-muted mb-0 small"><?php echo $product->description?></p>
                            <p class="font-italic text-muted mb-0 small"><?php echo $product->brand?></p>
                            <p class="font-italic text-muted mb-0 small"><?php echo $product->category?></p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2">$   <?php echo $product->price?></h6>
                            </div>
                        </div><img src="<?php echo $product->thumbnail?>" href="single-product.php" alt="Generic placeholder image" width="200" height="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                        <?php }?>
                    </li> <!-- End -->
                </ul> <!-- End -->
            </div>
        </div>
    </div>


  <!-- FOOTER -->
  <footer class="container">
    <p>&copy; Yabut, Micoh Jomarie A</p>
  </footer>
</main>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

      
  </body>
</html>
