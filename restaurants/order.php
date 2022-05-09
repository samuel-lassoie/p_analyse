<?php
require_once('orderItem.php');
require_once('customer.php');

class Order
{
    private string $_id;

    private Customer $_customer;
    private array $_orderItems;

    public function __construct(Customer $customer)
    {
        $this->_id = uniqid('order_');
        $this->_customer = $customer;
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


    public function getTotal()
    {
        $total = 0;
        foreach ($this->_orderItems as $orderItem) {
            $total += $orderItem->getTotal();
        }

        $discount = $this->_customer->get_discount();
        return $total - ($total * $discount);
    }
}
