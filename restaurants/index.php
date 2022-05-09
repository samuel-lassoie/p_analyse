<?php

require_once('product.php');
require_once('customer.php');
require_once('order.php');
require_once('orderItem.php');

// CREATE PRODUCTS
$lasagne = new Product('lasagne', 9.99);
$pizza = new Product('pizza', 12.50);
$platEnfant = new Product('plat Enfant', 12.50);


// CREATE CUSTOMER
$customer1 = new Customer('Maurice', 'Roger', 0.8);


// CREATE ORDER FOR FIRST CLIENT
$order1 = new Order($customer1);
$orderId = $order1->get_id();
    // CUSTOMER ORDER FOOD, We create orderItem
    $orderItem1 = new OrderItem($orderId, $lasagne, 12);
    $orderItem2 = new OrderItem($orderId, $platEnfant, 1);
$order1->addOrderItem($orderItem1);
$order1->addOrderItem($orderItem2);

$orderTotal = $order1->getTotal();

print $orderTotal;
