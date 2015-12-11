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
		<div style="background-color:#FFDEAD; margin-left:20px; margin-top:20px; border-radius:5px; padding-left:200px; height:40px; "> Please, enter your changes</div>
		<form action="action_add_product" method='post' enctype="multipart/form-data">
			<div class="left_part">
				<strong>Name:</strong><br>
				<input type="text" name="name" value="<?=$product['name']?>"><br>
				<strong>Type:</strong><br>
				<?=createSelect($product['type'], $product_type_list,"type_id")?><br>	
				<strong>Price:</strong><br>
				<input type="text" name="price" value="<?=$product['price']?>"><br>
			</div>
			<div class="right_part">
				<strong style="margin-left:60px;">Logo:</strong><br>
				<input type='file' name='logo'  style="background-color:lightgray; width: 230px; border-radius:5px; padding 15px; margin-left:60px;"><br>
				<strong style="margin-left:60px;">Gallery:</strong><br>
				<input type='file' name='photos[]' multiple style="background-color:lightgray; width: 230px; border-radius:5px; padding 15px; margin-left:60px;"><br>
			</div>
			<div style="clear:both">
				<strong>Description:</strong><br>
				<textarea cols="90" rows="15" name="description"><?=$product['description']?></textarea><br>
				<input type='submit' value="Edit product" onclick="location.href='edit_action_product'" style="width:180px; height:40px;">
			</div>
		</form>
	</div>
	
</div>