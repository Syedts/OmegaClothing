<?php
if(isset($_POST["view_item"]))
{
    header('location:  /items/item.php?item_id='.$_POST["view_item"]);
}
?>