<div injection-id-url-active="/nav-menu.html"></div>
<div style='height: 5%; background-color: black;'></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
<script src="/libs/js/inject.js"></script>



<?php 
include($_SERVER['DOCUMENT_ROOT'].'/libs/php/session_checker.php');
include($_SERVER['DOCUMENT_ROOT'].'/libs/php/add_to_cart.php');
include($_SERVER['DOCUMENT_ROOT'].'/libs/php/view_item.php');

if(isset($_GET["gender"])){
  $gender = "('".$_GET["gender"]."','UNISEX')";
}else{
  $gender = "('MEN','WOMEN','UNISEX')";//"('MEN','WOMEN','UNISEX')"
}


$connect = mysqli_connect("localhost", "root", "", "test");
?>

<link rel="stylesheet" type="text/css" href="clothing_search.css">
<section class="items" id="items">
  <ul>
  <?php
				$query = "SELECT * FROM item_list WHERE `gender` IN".$gender;
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
			?>
    <li>
      <figure>
        <img src="https://images.unsplash.com/photo-1471421298428-1513ab720a8e" alt="Several hands holding beer glasses">
        <figcaption><h3><?php echo $row["name"]; ?></h3></figcaption>
      </figure>
      <h4>
      $<?php echo $row["price"]; ?>
      </h4>
      <p>
        <?php echo $row["description"]; ?>
      </p>

      <button type="hidden"onclick="this.children[0][0].click();">
      view item
        <form style="display: none" action="" method="POST">
          <input style="display: none" type="submit" name="view_item" value="<?php echo $row["id"];?>" />
        </form></button>
      <button type="hidden"onclick="this.children[0][0].click();">
        add to cart
        <form style="display: none" action="" method="POST">
          <input style="display: none" type="submit" name="add_to_cart" value="<?php echo $row["id"];?>" />
        </form>
      </button>
    </li>
    <?php
					}
				}
			?>
    <li style="visibility:hidden"></li>
    <li style="visibility:hidden"></li>
  </ul>
</section>

<div injection-id-url-active="/footer.html"></div>
<script>history.pushState({}, "", "")</script>

