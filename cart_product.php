<?php echo form_open("cart/update"); ?>

<table border="1">
	<tr>
		<th>Qty</th>
		<th>Name</th>
		<th>Price</th>
		<th>Sub Price</th>
	</tr>
	<?php
	$i=1;
	foreach($this->cart->contents() as $item)
	{
		echo form_hidden($i.'[rowid]', $item['rowid']);
		echo "<tr>";
		echo "<td>";
		echo form_input(array("name" => $i.'[qty]', "value" => $item['qty'], "maxlength" =>"3", "size"=>"5"));
		echo "</td>";
		echo "<td>".$item['name']."</td>";
		echo "<td>".$item['price']."</td>";
		echo "<td>".$item['subtotal']."</td>";
		echo "</tr>";
		$i++;
	}
	?>
	<tr>
		<td colspan="3">Total</td>
		<td><?php echo $this->cart->total(); ?></td>
	</tr>
</table>
<?php echo form_submit("update_cart", "Update To Cart"); ?>