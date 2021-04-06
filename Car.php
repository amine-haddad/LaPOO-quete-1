<?php


class Car
{
    private int $nbWheels ;
    
    private int $currentSpeed;
    
    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;



    public function __construct(string $color, int $nbSeats, string $energy)

    {
        $this->color = $color;
        $this->nbSeats =$nbSeats;
        $this->energy = $energy;
        
    }

    public function forward(): string

    {
        //$this->currentSpeed = 20;
        return "Go !";
    }

    public function brake(): string

    {
        $sentence = "";

            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "Brake !!!";
            }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start() {
        echo 'Je demarre :';
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed ;
    }

    public function setCurrentSpeed(int $currentSpeed): void

    {
        if ($currentSpeed >= 0) {

            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string

    {

        return $this->color;
    }

    public function setColor(string $color): void

    {

        $this->color = $color;
    }
    public function getNbSeats(): int

    {

        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void

    {

        $this->nbSeats = $nbSeats;
    }

    public function getEnergy(): string

    {

        return $this->energy;
    }

    public function setEnergy(string $energy): void

    {

        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel ;
    }
}
