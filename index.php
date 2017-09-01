<?php
  include("templates/database.php");
?>

<?php include("formPosts.php");?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="description" content="Hammocks, Shirts, Kids Hammocks, Compression Pillows">
    <meta name="author" content="Yonah Outdoors">

    <title>Yonah Outdoors Store</title>

    <?php include("templates/head.php"); ?>

</head>

<body>

  <?php include("templates/navbar.php"); ?>


  <?php
    if(isset($_GET['page'])){
      switch($_GET['page']){
        case "home":
          include("pages/home.php");
          break;
        case "shop":
          include("pages/shop.php");
          break;
        case "shop-item":
          include("pages/shop-item.php");
          break;
        default:
          include("pages/home.php");
          break;
      }
    }else{
      include("pages/home.php");
    }
 ?>

<?php include("templates/signup.php"); ?>
<?php include("templates/footer.php"); ?>




</body>
</html>
