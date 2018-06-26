<?php require_once('../private/initialize.php'); ?>





<?php $page_title = "Bike Inventory"; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>




<div id="main">
	
	<div id="page">

		<div class="intro">
			<img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg'); ?>" />
			<h2>Our Inventory of Used Bicycles</h2>
			<p>Choose the bike you love.</p>
			<p>We will deliver it to your door and let you try it before you buy it.</p>
		</div>

		<table id="inventory">
			<tr>
				<th>Brand</th>
				<th>Model</th>
				<th>Year</th>
				<th>Category</th>
				<th>Gender</th>
				<th>Color</th>
				<th>Weight</th>
				<th>Condition</th>
				<th>Price</th>
			</tr>


			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
			</tr>

		</table>
		
	</div>

</div>





<?php include(SHARED_PATH . '/public_footer.php'); ?>



