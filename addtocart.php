<?php

require_once 'conn.php';

use app\CartItem;
use app\Cart;
use app\BasketClass;
use app\SessionCheck;
use app\InputFilters;

session_start();
ob_start();

$data=new InputFilters();
$input = $data->getBody();


$id = $input['id'];
$query = "select *from inventory where id ='".$id."'";
$result = mysqli_query($conn->connect(),$query);
$row = mysqli_fetch_assoc($result);

$CartItem = new CartItem($row['id'],$row['name'],$row['price'],$row['quantity']);

$cart=SessionCheck::getCartInstance();

$cart->addToCart($CartItem);

// include 'basket.php';
BasketClass::buildCart($cart);


?>



