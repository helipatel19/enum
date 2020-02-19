<?php
abstract class Product{

	const product_name = "smart phone";
	const product_price = 10000;
	const colors = array('black','gray','blue');

}

class ProductDetails extends Product{

	function getProductName(){
		echo "Product: ".Product::product_name."\n\n"; // using Product classname
	}

	function getProductPrice(){
		echo "Product price :".Product::product_price."\n\n"; // using Product
	}

	function getProductColors(){
		echo "available colors:";
		foreach (Product::colors as $color){
			echo $color.", ";
		}
	}
}

$p = new ProductDetails;

$p->getProductName();
$p->getProductPrice();
$p->getProductColors();
?>
