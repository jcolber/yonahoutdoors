<?php
  include("database.php");

// If categoryId is part of the url string and has a value
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




  // Add varianbles that you create in other files into a comma separated list below.
  // It will mean a variable you create in another file is accessible in this one.
  // As an example, $products is created in the templates/database.php file
  //   \/
  global $link;
?>

<?php include("formPosts.php");?>
<!DOCTYPE html>
<html lang="en">





<?php include("signup.php"); ?>
<?php include("footer.php"); ?>
