<?php

final class ResidentialWay extends HighWay
{
    protected $maxSpeed;

    protected $nbLane;

    public function __construct()
    {
        $this->maxSpeed =50;
        $this->nbLane = 2;
    }

        public function addVehicle($Vehicle)
    {
        return 'Peut etre pas tres conseillé pour les skates et velos mais les autres c\'est OK. ';
    }

    public function addVehicule(Truck $foodTruck)
    {
    }

}