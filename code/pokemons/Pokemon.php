<?php

class Pokemon {
    public $Name;
    public $EnergyType;
    public $HitPoints;
    public $Health;
    public $Attacks = array();
    public $Weakness;
    public $Resistance;

    function __construct($name, $energytype, $hitpoints, $health, $attacks, $weakness, $resistance) 
    {
        $this->Name = $name;
        $this->EnergyType = $energytype;
        $this->HitPoints = $hitpoints;
        $this->Health = $health;
        $this->Attacks = $attacks;
        $this->Weakness = $weakness;
        $this->Resistance = $resistance;
    }
    
}