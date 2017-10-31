<?php
class DrinkBase
{
    protected $_components = [];
    protected $_name;
    protected $_description;
    protected $_price;

    public function addComponent(ComponentBase $component)
    {
        $this->_components[] = $component;
    }

    public function getPrice(): float
    {
        if (!$this->_price)
            foreach ($this->_components as $component) {
                $this->_price += $component->getPrice();
            }

        return $this->_price;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getDescription()
    {
        return $this->_description;
    }
}