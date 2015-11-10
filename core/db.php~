<?php 
function get_connection()
{
	return mysqli_connect('localhost', 'root', '', 'internetshop');
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
?>
