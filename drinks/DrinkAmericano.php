<?php
class DrinkAmericano extends DrinkBase
{
    public function __construct()
    {
        $this->_name = 'Americano';
        $this->_description = 'Mild coffee (not so strong)';

        $components = [
            new ComponentWater,
            new ComponentWater,
            new ComponentCofee
        ];

        foreach ($components as $component) {
            $this->addComponent($component);
        }
    }
}