<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3 align="center">My Shop (<?php echo $total_item=count($this->cart->contents()); ?>)
|| <?php echo anchor("Cart/cart_product/",'Go To Cart'); ?>
|| <?php echo anchor("Cart/remove/", 'Empty Cart'); ?>
</h3>
<table border="1" align="center">
	<tr>
		<?php
			foreach($products as $product)
			{
				echo "<td>".
				"<h3>".$product->product_title."</h3>".
				"<h4>".$product->product_price."</h4>";
				?>
				<?php
				echo form_open("Cart/add");
				echo form_hidden("id", $product->product_id);
				echo form_hidden("name", $product->product_title);
				echo form_hidden("price" ,$product->product_price);
				?>
				<input type="submit" name="action" value="Add To Cart">
				<?php
				echo form_close();
				echo "</td>";
			}
		?>
	</tr>
</table>
</body>
</html>