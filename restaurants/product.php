<?php

class Product
{
    private string $_id;

    private string $_label;

    private float $_price;


    public function __construct(string $label, float $price)
    {
        $this->_id = uniqid('product_');
        $this->_label = $label;
        $this->_price = $price;
    }
    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _label
     */
    public function get_label()
    {
        return $this->_label;
    }

    /**
     * Set the value of _label
     *
     * @return  self
     */
    public function set_label($_label)
    {
        $this->_label = $_label;

        return $this;
    }

    /**
     * Get the value of _price
     */
    public function get_price()
    {
        return $this->_price;
    }

    /**
     * Set the value of _price
     *
     * @return  self
     */
    public function set_price($_price)
    {
        $this->_price = $_price;

        return $this;
    }
}
