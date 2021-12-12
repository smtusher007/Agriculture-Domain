<?php 
	
	require_once('../Model/orderModel.php');
	
	$id = $_REQUEST['id'];
	$orders = getOrderById($id);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<form method="post" action="../Controller/updateOrder.php">
		<fieldset>
			<legend>Edit Order List</legend>
			<table>
				<tr>
					<td>Customer Name</td>
					<td><input type="text" name="customer" value="<?=$orders['customerName'] ?>"></td>
				</tr>
				<tr>
					<td>Seller Name</td>
					<td><input type="text" name="seller" value="<?=$orders['sellerName'] ?>"></td>
				</tr>
				<tr>
					<td>Ordered Item</td>
					<td><input type="text" name="oItem" value="<?=$orders['orderedItem'] ?>"></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="text" name="quantity" value="<?=$orders['quantity'] ?>"></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="text" name="price" value="<?=$orders['price'] ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$orders['id'] ?>"></td>
					<td><input type="submit" name="submit" value="Update"></td>
					<td><input type="reset" name="reset" value="Reset">
						<br><a href="../View/OrderList.php">Back</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>