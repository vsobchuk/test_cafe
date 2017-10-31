<?php
class DrinkCofee extends DrinkBase
{
    public function __construct()
    {
        $this->_name = 'Coffee';
        $this->_description = 'Very strong coffee';

        $components = [
            new ComponentWater,
            new ComponentCofee
        ];

        foreach ($components as $component) {
            $this->addComponent($component);
        }
    }
}