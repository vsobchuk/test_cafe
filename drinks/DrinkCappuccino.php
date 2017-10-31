<?php
class DrinkCappuccino extends DrinkBase
{
    public function __construct()
    {
        $this->_name = 'Cappuccino';
        $this->_description = 'Cappuccino with high foam';

        $components = [
            new ComponentWater,
            new ComponentCappuccino
        ];

        foreach ($components as $component) {
            $this->addComponent($component);
        }
    }
}