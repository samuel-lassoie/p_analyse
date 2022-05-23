<?php

require_once('database/connexion.php');

class ToDo
{
    private int $_id;
    private string $_label;
    private string $_created_at;

    public function __construct(int $id = null)
    {
        $this->_refreshData($id);
    }

    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    private function  _refreshData(int $id)
    {
        global $db;

        $query = $db->query('select * from todo where id='.$id);
        if ($query !== false) {
            $todo = $query->fetch(PDO::FETCH_ASSOC);
            $this->_id  = $todo['id'];
            $this->_label  = $todo['label'];
            $this->_created_at  = $todo['created_at'];
        }

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
     * Get the value of _created_at
     */
    public function get_created_at()
    {
        return $this->_created_at;
    }

    public function save()
    {
        global $db;

        $query = $db->query('insert into todo (`label`) values ("'.$this->get_label().'")');
        $id = $db->lastInsertId();
        $this->_refreshData($id);
    }
    
    public function delete()
    {
    }

    public function addItem()
    {

    }

    public function getItem(int $itemId)
    {
    }

    public function getItems()
    {
    }
    
}
