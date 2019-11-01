<?php

class MotorWay extends HighWay
{
    protected $maxSpeed;

    protected $nbLane;

    public function __construct()
    {
        $this->maxSpeed = 130;
        $this->nbLane = 4;
    }

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Car or $vehicle instanceof Truck)
        {
            $this->currentVehicles[]=$vehicle;
            return 'Zy va. ';
        }
        else
        {
            return 'Vaut mieux pas que tu t\'aventure par ici! ';
        }
    }
}