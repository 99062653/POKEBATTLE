<?php

class Pokemon extends Pokemons
{
    public $Name;
    public $EnergyType;
    public $HitPoints;
    public $Health;
    public $Attacks = array();
    public $Weakness = array();
    public $Resistance = array();
    public $Image;

    public function __construct($name, $energytype, $health, $attacks, $weakness, $resistance, $image)
    {
        $this->Name = $name;
        $this->EnergyType = $energytype;
        $this->HitPoints = $health;
        $this->Health = $health;
        $this->Attacks = $attacks;
        $this->Weakness = $weakness;
        $this->Resistance = $resistance;
        $this->Image = $image;

        $this->addPopulation($this);
    }

    public function Attack($enemypokemon, $attackdamage)
    {
        $enemypokemon->HitPoints = $enemypokemon->HitPoints - $attackdamage;
    }
}
