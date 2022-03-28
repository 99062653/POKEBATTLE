<?php

class Pokemon
{
    public $Name;
    public $EnergyType;
    public $HitPoints;
    public $Health;
    public $Attacks = array();
    public $Weakness = array();
    public $Resistance = array();
    public $Image;

    public function __construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance, $image)
    {
        $this->Name = $name;
        $this->EnergyType = $energytype;
        $this->HitPoints = $hitpoints;
        $this->Health = $health;
        $this->Attacks = $attacks;
        $this->Weakness = $weakness;
        $this->Resistance = $resistance;
        $this->Image = $image;
    }
}
