<?php

include_once 'conn.php';
use app\InputFilters;

$data=new InputFilters();
$input = $data->getBody();

$item = $input['item'];
$query = "select *from inventory where name like '".$item."%'";
$result = mysqli_query($conn->connect(),$query);
$items='';

while($rows = mysqli_fetch_assoc($result)){
	
	$items.="<div style='background-color: red; color:white; border-bottom: 1px solid white; padding: 5px; cursor:pointer;' onclick='addtocart(".$rows['id'].")' >".$rows['name']."</div>";	
}

echo $items;



?>
