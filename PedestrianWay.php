<?php

class PedestrianWay extends HighWay
{
    protected $maxSpeed;

    protected $nbLane;

    public function __construct()
    {
        $this->maxSpeed =10;
        $this->nbLane = 1;
    }

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Bicycle or $vehicle instanceof Skateboard)
        {
            $this->currentVehicles[]=$vehicle;
        }
        else
        {
            return ' ??? tu vas ou la ??? ';
        }
    }
}