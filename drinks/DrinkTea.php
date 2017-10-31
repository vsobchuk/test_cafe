<?php
class DrinkTea extends DrinkBase
{
    public function __construct()
    {
        $this->_name = 'Tea';
        $this->_description = 'Tasty Tea';

        $components = [
            new ComponentWater,
            new ComponentTeaBag
        ];

        foreach ($components as $component) {
            $this->addComponent($component);
        }
    }
}