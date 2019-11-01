<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = ['fuel', 'electric'];
    /**
     * @var string
     */
    private $energy;

    private $maxLoad;

    private $loadStatus = 0;

    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES))
        {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getMaxLoad(): int
    {
        return $this->maxLoad;
    }

    public function setMaxLoad(int $maxLoad)
    {
        $this->maxLoad = $maxLoad;
    }
    public function getLoadStatus()
    {
        if($this->loadStatus < $this->maxLoad)
        {
            return 'en chargement';
        }
            return 'full';
    }

    public function setLoadStatus(int $loadStatus)
    {
        $this->loadStatus = $loadStatus;
    }


    public function __construct($color, $nbSeats, $maxLoad, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->maxLoad = $maxLoad;
        $this->energy = $energy;
    }

    public function switchOn()
    {
        $this->light = true;
        return 'Feux allumés';
    }

    public function switchOff()
    {
        $this->light = false;
        return 'Feux éteinds';
    }
}