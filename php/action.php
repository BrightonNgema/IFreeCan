<?php
session_start();
include "db.php";

///////Displays categories
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Categories</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
			echo "
					<li><a href='store.php' class='category' cid='$cid'>$cat_name</a></li>
			";
		}
		echo "</div>";
	}
}

///////Displays brands
if(isset($_POST["brand"])){
	$brand_query = "SELECT * FROM brands";
	$run_query = mysqli_query($con,$brand_query);
	echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Brands</h4></a></li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$bid = $row["brand_id"];
			$brand_name = $row["brand_title"];
			echo "
					<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>
			";
		}
		echo "</div>";
	}
}

///////Pagination
if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	echo "<div class='btn-group'>";
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
		<button type='button' class='btn btn-primary' page='$i' id='page'>$i</button>

		";
	}
	echo "</div>";
}

///////Displays products
if(isset($_POST["getProduct"])){
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM products LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			echo "
			<div class='col-md-4'>
						<div class='products panel panel-info'>

							<div class='panel-body text-center'>
							<img src='product_images/$pro_image' style='width:100%; height:220px;'/>
											</div>
							<div class='product-title panel-heading'>$pro_title <span class=''style='float:right'> Id #$pro_id</span></div>
							<div class='product-price panel-heading'>R $pro_price.00
			";
			if (isset($_SESSION["uid"])){
				echo "
									<span class='glyphicon glyphicon-heart' pid='$pro_id' style='float:right;' id='product'></span>
								</div>
							</div>
						</div>
				";
			}else{
				echo "
									<!--<span class='glyphicon glyphicon-heart disabled' pid='$pro_id' style='float:right;' id='product' disabled></span>-->
								</div>
							</div>
						</div>
				";
			}
		}
	}
}

///////Displays product based on category, brand AND search results
if(isset($_POST["get_seleted_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products WHERE product_cat = '$id'";
	}else if(isset($_POST["selectBrand"])){
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$id'";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
	}

	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			echo "
			<div class='col-md-4'>
						<div class='products panel panel-info'>


							<div class='panel-body text-center'>
							<img src='product_images/$pro_image' style='width:100%; height:220px;'/>

							</div>

							<div class='product-title panel-heading'>$pro_title <span class=''style='float:right'>ID#$pro_id</span></div>

							<div class='product-price panel-heading'>R $pro_price.00
								<button pid='$pro_id' style='float:right;' id='product' class='btn btn-primary btn-xs'> <span class='glyphicon glyphicon-heart'></span> Add to Wishlist</button>
							</div>
						</div>
					</div>
			";
		}
	}

///////checks product from cart
	if(isset($_POST["addToProduct"])){

		if(isset($_SESSION["uid"])){
			$p_id = $_POST["proId"];
		$user_id = $_SESSION["uid"];
		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		$row = mysqli_fetch_array($run_query);
			$id = $row["p_id"];
			$pro_name = $row["product_title"];
		if($count > 0){///////Checks if product has been added in a cart
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>$pro_name</b> is already added into your Wishlist
				</div>
			";
		} else { ///////Adds product to cart
			$sql = "SELECT * FROM products WHERE product_id = '$p_id'";
			$run_query = mysqli_query($con,$sql);
			$row = mysqli_fetch_array($run_query);
				$id = $row["product_id"];
				$pro_name = $row["product_title"];
				$pro_image = $row["product_image"];
				$pro_price = $row["product_price"];
			$sql = "INSERT INTO `cart`
			(`id`, `p_id`, `ip_add`, `user_id`, `product_title`,
			`product_image`, `qty`, `price`, `total_amt`)
			VALUES (NULL, '$p_id', '0', '$user_id', '$pro_name',
			'$pro_image', '1', '$pro_price', '$pro_price')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>$pro_name Added to Wishlist</b>
					</div>
				";
			}
		}
		}else{
			echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Sorry..!go and Sign Up First then you can add a product to your cart</b>
					</div>
				";
		}




	}

///////Displays products on a cart and Place order button
if(isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])|| isset($_POST["place_order"])){
	$uid = $_SESSION["uid"];
	$sql = "SELECT * FROM cart WHERE user_id = '$uid'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count > 0){
		$no = 1;
		$total_amt = 0;
		while($row=mysqli_fetch_array($run_query)){
			$id = $row["id"];
			$pro_id = $row["p_id"];
			$pro_name = $row["product_title"];
			$pro_image = $row["product_image"];
			$qty = $row["qty"];
			$pro_price = $row["price"];
			$total = $row["total_amt"];
			$price_array = array($total);
			$total_sum = array_sum($price_array);
			$total_amt = $total_amt + $total_sum;
			// setcookie("ta",$total_amt,strtotime("+1 day"),"/","","",TRUE);
			if(isset($_POST["get_cart_product"])){
				echo "
				<div class='row'>
					<div class='col-md-3 col-xs-3'>$no</div>
					<div class='col-md-3 col-xs-3'><img src='product_images/$pro_image' width='60px' height='50px'></div>
					<div class='col-md-3 col-xs-3'>$pro_name</div>
					<div class='col-md-3 col-xs-3'>R $pro_price.00</div>
				</div>
			";
			$no = $no + 1;
			}else{
				echo "
					<div class='row'>
							<div class='col-md-2 col-sm-2'>
								<div class='btn-group'>
									<a href='#' remove_id='$pro_id' class='btn btn-danger btn-xs remove'><span class='glyphicon glyphicon-trash'></span></a>
									<a href='' update_id='$pro_id' class='btn btn-primary btn-xs update'><span class='glyphicon glyphicon-ok-sign'></span></a>
								</div>
							</div>
							<div class='col-md-2 col-sm-2'><img src='product_images/$pro_image' width='50px' height='60'></div>
							<div class='col-md-2 col-sm-2'>$pro_name</div>
							<div class='col-md-2 col-sm-2'><input type='number' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty' ></div>
							<div class='col-md-2 col-sm-2'><input type='text' class='form-control price' pid='$pro_id' id='price-$pro_id' value='$pro_price' disabled></div>
							<div class='col-md-2 col-sm-2'><input type='text' class='form-control total' pid='$pro_id' id='total-$pro_id' value='$total' disabled></div>

						</div>
				";
			}
		}
		if(isset($_POST["cart_checkout"])){
			echo "<div class='row'>
				<div class='col-md-8'></div>
				<div class='col-md-4'>
					<h3 class='float:right' >Total R $total_amt</h3>
				</div>";
		}
				// echo "
				//
				// <button style='float:right;' orderId='$pro_id' class='btn btn-primary place_order'>Place Order </button>
				// ";
	}
}

// if(isset($_POST["PlaceAnOrder"])){
// 	$uid = $_SESSION["uid"];
// 	$sql = "SELECT * FROM cart WHERE user_id = '$uid'";
// 	$run_query = mysqli_query($con,$sql);
// 	while($row=mysqli_fetch_array($run_query)){
//
// 		$id = $row["id"];
// 		$pro_id = $row["p_id"];
// 		$pro_name = $row["product_title"];
// 		$pro_image = $row["product_image"];
// 		$qty = $row["qty"];
// 		$add1 = $row["address1"];
// 		$pro_price = $row["price"];
// 		$total = $row["total_amt"];
// 		$price_array = array($total);
// 		$total_sum = array_sum($price_array);
// 		// $total_amt = $total_amt + $total_sum;
// 	}
// 			if($run_query){
// 				echo "
// 					<div class='alert alert-danger'>
// 						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
// 						<b>Product is Removed from Wishlist Continue Shopping..! $add1</b>
// 					</div>
//
// 				";
// 			}
//
// }

///////Counts number of products in cart
if(isset($_POST["cart_count"]) AND isset($_SESSION["uid"])){
	$uid = $_SESSION["uid"];
	$sql = "SELECT * FROM cart WHERE user_id = '$uid'";
	$run_query = mysqli_query($con,$sql);
	echo mysqli_num_rows($run_query);
}

///////Deletes product from cart
if(isset($_POST["removeFromCart"])){
	$pid = $_POST["removeId"];
	$uid = $_SESSION["uid"];
	$sql = "DELETE FROM cart WHERE user_id = '$uid' AND p_id = '$pid'";
	$run_query = mysqli_query($con,$sql);
	if($run_query){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Product is Removed from Wishlist Continue Shopping..!</b>
			</div>
		";
	}
}

///////Updates product quantity on cart
if(isset($_POST["updateProduct"])){
	$uid = $_SESSION["uid"];
	$pid = $_POST["updateId"];
	$qty = $_POST["qty"];
	$price = $_POST["price"];
	$total = $_POST["total"];
	if($qty > 1){
	$sql = "UPDATE cart SET qty = '$qty',price='$price',total_amt='$total'
	WHERE user_id = '$uid' AND p_id='$pid'";

	$run_query = mysqli_query($con,$sql);
		if($run_query){
			echo "
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Product is Updated Continue Shopping..!</b>
				</div>
			";
		}
}else{

			$sql = "DELETE FROM cart WHERE user_id = '$uid' AND p_id = '$pid'";
			$run_query = mysqli_query($con,$sql);
				if($run_query){
					echo "
						<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product Removed. Quantity less than 1</b>
						</div>
					";
				}
		}
}


/////// Display 4 products on home page
if(isset($_POST["get_display_product"])){
	$product_query = "SELECT * FROM products ORDER BY RAND() LIMIT 0,4 ";
	$run_query = mysqli_query($con,$product_query);
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			echo "
			<div class='col-md-3 col-sm-6'>
						<div class='products panel panel-info'>

							<div class='panel-body text-center'>
							<img src='product_images/$pro_image' style='width:100%; height:220px;'/>
											</div>
							<div class='product-title panel-heading'>$pro_title <span class=''style='float:right'> Id #$pro_id</span></div>
							<div class='product-price panel-heading'>R $pro_price.00
			";
			if (isset($_SESSION["uid"])){
				echo "
									<span class='glyphicon glyphicon-heart' pid='$pro_id' style='float:right;' id='product'></span>
								</div>
							</div>
						</div>
				";
			}else{
				echo "
									<!--<span class='glyphicon glyphicon-heart disabled' pid='$pro_id' style='float:right;' id='product' disabled></span>-->
								</div>
							</div>
						</div>
				";
			}
		}

}
?>
