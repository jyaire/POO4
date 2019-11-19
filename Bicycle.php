<?php

// Bicycle.php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    public function switchOn()
    {
        if ($this->getCurrentSpeed() > 10)
        return true;
        else return false;
    }

    public function switchOff()
    {
        return false;
    }
}
