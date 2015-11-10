
<div class="product">
	<div class="product-left">
		<img src="../images/<?=$product['logo']?>" width="100%"><br>
		<?php
		FOREACH ($image_list as $key=>$image)
			{
				?>
				<img src="../images/<?=$image['name']?>" width="165", height="120">
				<?php
			}
		?>
	</div>
	<div class="product-right">
		<div class="product-left-1">
			<strong>Name:</strong><?=$product['name']?>;<br>
			<strong>Type:</strong><?=$product['type']?>;<br>
			<strong>Price:</strong><?=$product['price']?>;<br>
		</div>
		<div class="product-right-1">
			<input type="button" value="Add to cart" onclick="location.href='buy_product?id=<?=$product['id']?>'"  class="product-button-green product-button">
			<input type="button" value="Edit" onclick="location.href='edit_product?id=<?=$product['id']?>'" class="product-button-yellow product-button">
			<input type="button" value="Delete" onclick="location.href='delete_product?id=<?=$product['id']?>'" class="product-button-red product-button">
		</div>
		<div class="product-desc">
			<strong>Description:</strong><p><?=$product['description']?></p><br>
		</div>
	</div>
</div>
