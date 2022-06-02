<?php 
if(isset($_POST["add_to_cart"]))
{
	echo $_POST["add_to_cart"];
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_POST["add_to_cart"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_POST["add_to_cart"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_POST["add_to_cart"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
	
}
?>