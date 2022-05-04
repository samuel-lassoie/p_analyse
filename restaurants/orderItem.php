<?php

require_once('product.php');

class OrderItem
{
    private string $_id;

    private string $_orderId;

    private float $_price;

    private string $_label;

    private string $_productId;

    private int $_quantity;


    public function __construct(string $orderId, Product $product, int $quantity)
    {
        $this->_id = uniqid('orderItem_');
        $this->_orderId = $orderId;
        $this->_label = $product->get_label();
        $this->_price = $product->get_price();
        $this->_productId = $product->get_id();
        $this->_quantity = $quantity;
    }

    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _quantity
     */
    public function get_quantity()
    {
        return $this->_quantity;
    }

    /**
     * Get the value of _label
     */
    public function get_label()
    {
        return $this->_label;
    }

    /**
     * Get the value of _price
     */
    public function get_price()
    {
        return $this->_price;
    }

    /**
     * Get the value of _orderId
     */
    public function get_orderId()
    {
        return $this->_orderId;
    }

    public function getTotal(): float
    {
        return $this->_price * $this->_quantity;
    }

    /**
     * Get the value of _productId
     */ 
    public function get_productId()
    {
        return $this->_productId;
    }
}
