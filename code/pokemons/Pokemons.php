<?php 

class Pokemons {
    public static $Population = array();
    public static $EnergyTypes = array(
        "Bug",
        "Dark",
        "Dragon",
        "Electric",
        "Fairy",
        "Fighting",
        "Fire",
        "Flying",
        "Ghost",
        "Grass",
        "Ground",
        "Ice",
        "Normal",
        "Poison",
        "Psychic",
        "Rock",
        "Steel",
        "Water");

    public function getPopulation() {
        return count(self::$Population);
    }

    public function addPopulation($pokemon)
    {
        array_push(self::$Population, $pokemon);
    }

    public function getPokemonByName($name)
    {
        foreach (self::$Population as $Pokemon) {
            if ($Pokemon->Name == $name) {
                return $Pokemon;
            }
        }
    }
}