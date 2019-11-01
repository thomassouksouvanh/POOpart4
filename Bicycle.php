<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{

    protected $light = false;

    public function switchOn()
    {
        if ($this->currentSpeed > 10 ) {
            $this->light = true;
            return 'Dynamo en train de tourner';

        }
        return 'T\'es ouf tu roule sans feux';
    }

    public function switchOff()
    {
        $this->light = false;
        return 'pas de dynamo ou fonctionne pas ';
    }
}

