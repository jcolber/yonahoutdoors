<?php

if( isset($_GET['categoryId']) ){
  //run this MySQL query
  $result = mysqli_query($link,
    "SELECT
      *
    FROM
      products p
    JOIN
      product_categories pc ON p.id = pc.product_id
    WHERE
      pc.category_id = ".$_GET['categoryId']
  );

// If categoryId is NOT part of the url string run this MySQL query
}else{
  $result = mysqli_query($link, "SELECT * FROM products");
}

while( $row = mysqli_fetch_assoc($result)){
  $products[] = $row; // Inside while loop
}
  $result = mysqli_query($link, "SELECT * FROM categories");
  while( $row = mysqli_fetch_assoc($result)){
    $categories[] = $row; // Inside while loop
  }


 ?>

<!-- <head>

    <meta name="description" content="Hammocks, Shirts, Kids Hammocks, Compression Pillows">
    <meta name="author" content="Yonah Outdoors">

    <title>Yonah Outdoors Store</title>

    <?php // include("../templates/head.php"); ?>

</head>

<body> -->


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4"><img src="../img/yonah-diamond-brown.png"/></h1>
                <div class="list-group">
                  <?php foreach($categories as $category){ ?>
                      <a href="../index.php?page=shop&categoryId=<?php echo $category['id'];?>" class="list-group-item">
                        <?php echo $category['name'] ?>
                      </a>
                    <?php } ?>
                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="../img/banner-bg.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="../img/banner-bg.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="../img/banner-bg.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">

                  <?php // ITERATE OVER EACH OF THE PRODUCTS IN THE PRODUCTS ARRAY AND CREATE A DIV FOR EACH ?>
                  <?php foreach($products as $product){ ?>
                    <?php // var_dump($product);?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <a href="/index.php?page=shop-item&id=<?php echo $product['id'];?>">
                              <img class="card-img-top img-fluid" src="<?php echo $product['image'];?>" alt="">
                            </a>
                            <div class="card-block">
                                <h4 class="card-title">
                                  <a href="/index.php?page=shop-item&id=<?php echo $product['id'];?>">
                                    <?php //print the product name in this <a> tag ?>
                                    <?php echo $product['name'];?>
                                  </a>
                                </h4>
                                <h5>
                                  <?php //print the product price in this <a> tag ?>
                                  <?php echo $product['price'];?>
                                </h5>
                                <p class="card-text">
                                  <?php //print the product description in this <a> tag ?>
                                  <?php echo $product['description'];?>
                                </p>
                            </div>
                            <div class="center-content">
                              <button type="button" class="btn btn-primary padboss"> <i class="fa fa-shopping-cart"></i>
                                <?php echo $product['price'];?>
                              </button>
                            </div>
                        </div>
                    </div>
                  <?php }; ?>




                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
