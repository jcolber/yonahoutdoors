
<?php

  $id=$_GET["id"];
  $result = mysqli_query($link, "SELECT * FROM products WHERE id=".$id);
  $product = mysqli_fetch_assoc($result);

  global $link;
?>


<!--
<head>


    <meta name="description" content="Hammocks">
    <meta name="author" content="Yonah Outdoors">

    <title>Yonah Outdoors Double Den Hammock</title>

    <?php //include("../templates/head.php"); ?>


</head>

-->

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class=" col-xs-2">
                <h1 class="my-4"><img src="../img/yonah-diamond-brown.png"/></h1>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Hammocks</a>
                    <a href="#" class="list-group-item">Clothing</a>
                    <a href="#" class="list-group-item">Adjustable Straps</a>
                </div>
            </div>
            <!-- /.col-lg-3 -->




            <div class="col-lg-9">
              <?php // ITERATE OVER EACH OF THE PRODUCTS IN THE PRODUCTS ARRAY AND CREATE A DIV FOR EACH ?>

                <div class="card mt-4">

                    <div class="card-block" "col-lg-2">
                        <h3 class="card-title"><img class="card-img-top img-fluid" src="<?php echo $product['image'];?>" alt=""></h3>
                        <h4><?php echo $product['price'];?></h4>
                        <h1 class="card-text"><?php echo $product['name'];?>
                        </h1>
                        <br>
                        <br>
                        <p><?php echo $product['description'];?></p>
                        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span> 4.0 stars
                    </div>
                    <a href="#" class="btn btn-success">Add to Cart
                    </a>
                </div>
                <!-- /.card -->

                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        Product Reviews
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <a href="#" class="btn btn-success">Leave a Review</a>
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

        </div>

    </div>
    <!-- /.container -->
