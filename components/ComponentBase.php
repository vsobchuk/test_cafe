<?php
class ComponentBase 
{
    protected $_name;
    protected $_price;

    public function getName()
    {
        return $this->_name;
    }

    public function getPrice()
    {
        return $this->_price;
    }
}