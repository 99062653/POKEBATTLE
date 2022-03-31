<?php 

class Pokemons {
    public static $Pokemons = array();
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

    public function getPopulation()
    {
        return count(self::$Pokemons);
    }

    public function addPopulation($pokemon)
    {
        array_push(self::$Pokemons, $pokemon);
    }

    public function getPokemonByName($name)
    {
        foreach (self::$Pokemons as $Pokemon) {
            if ($Pokemon->Name == $name) {
                return $Pokemon;
            }
        }
    }
}