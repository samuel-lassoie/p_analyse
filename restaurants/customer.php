<?php

class Customer
{
    private string $_id;
    private string $_firstName;
    private string $_lastName;
    private ?string $_email;


    public function __construct(string $firstName, string $lastName, string $email = null)
    {
        $this->_id = uniqid('customer_');
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_email = $email;
    }

    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _firstName
     */
    public function get_firstName()
    {
        return $this->_firstName;
    }

    /**
     * Set the value of _firstName
     *
     * @return  self
     */
    public function set_firstName($_firstName)
    {
        $this->_firstName = $_firstName;

        return $this;
    }

    /**
     * Get the value of _lastName
     */
    public function get_lastName()
    {
        return $this->_lastName;
    }

    /**
     * Set the value of _lastName
     *
     * @return  self
     */
    public function set_lastName($_lastName)
    {
        $this->_lastName = $_lastName;

        return $this;
    }

    /**
     * Get the value of _email
     */
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }
}
