<?php
require_once('orderItem.php');

class Order
{
    private string $_id;

    private string $_customerId;
    private array $_orderItems;

    public function __construct(string $customerId)
    {
        $this->_id = uniqid('order_');
        $this->_customerId = $customerId;
    }

    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    public function addOrderItem(OrderItem $orderItem): self
    {
        $this->_orderItems[] = $orderItem;
        return $this;
    }
}
