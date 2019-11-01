<?php

require_once 'Vehicle.php';

require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = ['gazoil', 'electric'];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct($color,$nbSeats,$energy)
    {

        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES))
        {
            $this->energy = $energy;
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn()
    {
        $this->light = true;
        return 'Feux allumés';
    }

    public function switchOff()
    {
        $this->light = false;
        return 'Feux eteinds ';
    }
}