<?php
include "db.php";

//Getting categories
  if (isset($_POST["category"])) {
    $category_query = "select * From categories";
    $run_query = mysqli_query($con, $category_query);
    if (mysqli_num_rows($run_query)> 0) {
      while ($row = mysqli_fetch_array($run_query)) {
        $cid = $row["cat_id"];
        $cat_name = $row["cat_title"];

        echo "<li class='col-md-4'><a href='#' class='category' cid='$cid' style='text-decoration:none;color:black'><h3>$cat_name</h3></a></li>";
      }

    }
  }


  //Getting Products
    if (isset($_POST["getProduct"])) {
      $product_query = "select * From products ORDER BY RAND() LIMIT 0,9";
      $run_query = mysqli_query($con, $product_query);

      if (mysqli_num_rows($run_query)> 0) {
        while ($row = mysqli_fetch_array($run_query)) {
          $pid = $row["product_id"];
          $p_cat= $row["product_cat"];
          $p_brand = $row["product_brand"];
          $p_name = $row["product_title"];
          $p_price = $row["product_price"];
          $p_desc = $row["product_desc"];
          $p_image = $row["product_image"];
          $p_keywords = $row["product_keywords"];


          echo "

            <div class='col-md-3 shop_box'><a href='single.html'>
  					<img src='products/$p_image' class='img-responsive' alt='/>
  					<div class='shop_desc'>

              <div class='shop_desc'>
              <h3><a href='#'>$p_name</a></h3>
    						<p>$p_desc</p>
    						<span class='actual'>R $p_price.00</span><br>
    						<ul class='buttons'>
    							<li class='btn btn-danger btn-xs cart'><a href='#' pid='$pid'>Add To Cart</a></li>
    							<li class='btn btn-default btn-xs shop_btn'><a href='#'>Read More</a></li>
    							<div class='clear'> </div>
    					    </ul>
    				    </div>
  				</a></div>

          ";
        }

      }
    }

    //Products by category
    if (isset($_POST["get_Selected_Cat"]) || isset($_POST["search"])) {
      if(isset($_POST["get_Selected_Cat"])){
      $cid = $_POST["cat_id"];
      $sql = "SELECT * FROM products WHERE product_cat = '$cid' ORDER BY RAND() LIMIT 0,9"  ;

      }else{
        $keyword = $_POST["keyword"];
        $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
      }
      $run_query = mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($run_query)){
        $pid = $row["product_id"];
        $p_cat= $row["product_cat"];
        $p_brand = $row["product_brand"];
        $p_name = $row["product_title"];
        $p_price = $row["product_price"];
        $p_desc = $row["product_desc"];
        $p_image = $row["product_image"];
        $p_keywords = $row["product_keywords"];


        echo "

          <div class='col-md-3 shop_box'><a href='single.html'>
          <img src='products/$p_image' class='img-responsive' alt='/>
          <div class='shop_desc'>

            <div class='shop_desc'>
            <h3><a href='#'>$p_name</a></h3>
              <p>$p_desc</p>
              <span class='actual'>R $p_price.00</span><br>
              <ul class='buttons'>
                <li class='btn btn-danger btn-xs cart'><a href='#' pid='$pid'>Add To Cart</a></li>
                <li class='btn btn-primary btn-xs shop_btn'><a href='#'>Read More</a></li>
                <div class='clear'> </div>
                </ul>
              </div>
        </a></div>

        ";
      }

    }


 ?>
