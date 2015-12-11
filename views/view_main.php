		
	<div class="left_part">
		<!-- <div style="background-color:#FFDEAD; margin-left:20px; margin-top:20px;  width: 230px; border-radius:5px; padding-left:15px;"> Add your product into product list</div>
			<form action="action_add_product" method='post' enctype="multipart/form-data">
				<strong>Name:</strong><br>
				<input type="text" name="name"><br>
				<strong>Type:</strong><br>
				<?//=createSelect(0, $product_type_list,"type_id")?><br>	
				<strong>Price:</strong><br>
				<input type="text" name="price"><br>
				<strong>Logo:</strong><br>
				<input type='file' name='logo'  style="background-color:lightgray; width: 230px; border-radius:5px; padding 15px;"><br>
				<strong>Gallery:</strong><br>
				<input type='file' name='photos[]' multiple style="background-color:lightgray; width: 230px; border-radius:5px; padding 15px;"><br>
				<strong>Description:</strong><br>
				<textarea cols="30" rows="10" name="description"></textarea><br>
				<input type='submit' value="Add product" onclick="location.href='main'" style="width:180px; height:40px;">
			</form>-->
		<?php 
		for ($i=0; $i<count($product_type_list); $i++)
		{
			$type=$product_type_list[$i]['name'];
			?>
			<input class="types" type="button" value="<?=$product_type_list[$i]['name']?>" onclick="location.href='main?type=<?=$type?>'"><br>
			<?php
		}
		?>
		</div>
		<div class="column-2">
			<div class="column-2-left">
				<?php 
				foreach ($product_list as $key=>$value)
					{
						?>
						<div class="product-images">
							<div class="left_part">
							<img src="../images/<?=$value['logo']?>" width="200px"><br>
							</div>
							<div class="right_part">
								<strong>Name:</strong><?=$value['name']?>;
								<input style="float:right; width:180px; height:40px;" type="button" value="Buy now" onclick="location.href='?id=<?=$value['id']?>';"><br>
								<strong>Type:</strong><?=$value['type']?>;<br>
								<strong>Price:</strong><?=$value['price']?>;<br>
								<strong>Description:</strong><p><?=$value['description']?></p><br>
							</div>
						<hr class="clear">
						</div>
						<?php
					}
				?>
			</div>
			<div class="column-2-right">
				<form>
					<div style="float:left">
						Name:<br>
						<select class='input_width' name='name_order'>
							<option value='asc'>asc</option>
							<option value='desc'>desc</option>
						</select><br>
					</div>
					<div style="float:right">
						Price:<br>
						<select class='input_width' name='price_order'>
							<option value='asc'>asc</option>
							<option value='desc'>desc</option>
						</select><br>
					</div>
					<input style="width:75px;" type="submit" name='sort' value="Sort">
					<input style="width:75px;" type='reset'><br>
				</form>
			<strong style="margin-left:40px">Currency rate</strong>
			<table style="rows:12">
				<tr>
					<td class="currency">Name</td>
					<td class="currency">Rate</td>
				</tr>
				<?php 
					for ($i=0; $i<count($names); $i++)
					{?>
						<tr>
							<td class="currency"><?=$names[$i];?></td>
							<td class="currency"><?=$values[$i];?></td>
						</tr>
					<?php
					}
				?>
			</table>
			</div>
		</div>