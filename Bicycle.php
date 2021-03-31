<?php

// Bicycle.php

class Car
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels;
    private string $energy;
    private int $energyLevel;

    // le construct de la classe    
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;

    }

    //methode public for forward
    public function forward(): string
    {
        if($this === $nbSeats = 1){

            $this->currentSpeed = 10;
        }else {
            $this->currentSpeed = 25;
        }

        return "Go !";
    }
    //methode public for breaking
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

    // Démarre la voiture si le réservoir
    // n'est pas vide
    public function start()
    {
        if ($this->getEnergyLevel()) {
            echo 'Le véhicule démarre';
            return true;
        }

        echo 'Le réservoir est vide...';
        return false;
    }


    // Vérifie qu'il y'a du carburant dans le réservoir
    
    public function getEnergyLevel(): int
    {
        return ($this->energyLevel = true);
        
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed ;
    }
    

    public function getColor(): string
    {
        return $this->color;
    }


    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    
}
//return $this->energylevel;