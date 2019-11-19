<?php

// Vehicle.php

class Vehicle
{
    /**
    * @var string
    */
    protected $color;

    /**
    * @var integer
    */
    protected $currentSpeed;

    /**
    * @var integer
    */
    protected $nbSeats;

    /**
     * @var string
     */
    protected $energy;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
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

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     * @return Vehicle
     */
    public function setEnergy(string $energy): Vehicle
    {
        $this->energy = $energy;
        return $this;
    }

       public function brake(): string
    {
    $sentence = "";
    while ($this->currentSpeed > 0) {
    $this->currentSpeed--;
    $sentence .= " Brake !!!";
    }

    $sentence .= " I'm stopped !";
    return $sentence;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
}

