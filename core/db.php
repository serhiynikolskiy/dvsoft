<?php 
function get_connection()
{
	return mysqli_connect('localhost', 'root', '123456', 'internetshop');
}
//_____________________________________________________SELECT__________________________________________________________
function select($table, $where="", $what="")
{
	$db_connection=get_connection();
	
	if (!$what)
	{
		$what_sql=" * ";
	}
	else
	{
		$what_sql=" $what ";
	}
	if ($where)
	{
		$where_sql="  WHERE  ".$where;
	}
	$query="SELECT $what_sql FROM $table $where_sql";
	//echo $query, "<br>";
	$result=mysqli_query($db_connection, $query);
	if (mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$rows[]=$row;
		}
	}
	else
	{
		//mysql_error($db_connection);
	}
	mysqli_close($db_connection);
	return $rows;
}
//_____________________________________________________INSERT__________________________________________________________
function insert_user($name, $surname, $phone, $email, $password, $salt)
{
	$db_connection=get_connection();
	$query="INSERT INTO users(name, surname, phone, email, password, salt) VALUES ('$name', '$surname', '$phone', '$email', '$password', '$salt')";
	mysqli_query($db_connection, $query);
	mysqli_close($db_connection);
}
function insert_product($name, $type, $price, $description, $logo)
{
	$db_connection=get_connection();
	$query="INSERT INTO products(name, type, price, description, logo) VALUES ('$name', '$type', '$price', '$description', '$logo')";
	mysqli_query($db_connection, $query);
	mysqli_close($db_connection);
}
function insert_images($id, $name)
{
	$db_connection=get_connection();
	$query="INSERT INTO product_gallery(id, name) VALUES ('$id', '$name')";
	mysqli_query($db_connection, $query);
	mysqli_close($db_connection);
}
//_____________________________________________________DELETE__________________________________________________________
function delete($sql)
	{	
		$db_connection=get_connection();
		mysqli_query($db_connection,$sql);
		mysqli_close($db_connection);
	}
//_____________________________________________________QUERY__________________________________________________________
function query($sql)
	{	
		$db_connection=get_connection();
	
		$rows = mysqli_query($db_connection,$sql);
		
		if ($rows) 
		{	
			while ($row = mysqli_fetch_assoc($rows))
			{
				$result[] = $row;
			}
		}
		else
		{

			mysqli_error($db_connection);			
				
		
			$result=false;
		}
		
		
		mysqli_close($db_connection);
		
		
		return $result;
	}
//_____________________________________________________INSERT__________________________________________________________
function update_product($name, $type, $price, $description, $logo, $id)
{
	$db_connection=get_connection();
	$query="UPDATE products SET name='$name', type='$type', price='$price', description='$description', logo='$logo' WHERE id='$id'";
	mysqli_query($db_connection, $query);
	mysqli_close($db_connection);
}
?>
