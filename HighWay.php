<?php


abstract class HighWay
{
    protected $currentVehicles;

    protected $nbLane;

    protected $maxSpeed;

    abstract public function addVehicle($vehicle);

    public function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles=$currentVehicles;
    }

    public function setNbLane($nbLane)
    {
        $this->nbLane=$nbLane;
    }

    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles():array
    {
        return $this->currentVehicles;
    }

    public function getNbLane()
    {
        return 'Le nombre de voie de cette route est de ' .$this->nbLane;
    }

    public function getMaxSpeed()
    {
        return 'Tu ne peux pas rouler plus de ' .$this->maxSpeed. ' km! Mec! ';
    }

}