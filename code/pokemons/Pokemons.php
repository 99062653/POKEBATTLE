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
    
    public static function getPokemonbyName($name)
    {
        foreach (Pokemons::$Pokemons as $Pokemon) {
            if ($Pokemon->Name == $name) {
                return $Pokemon;
            }
        }
    }
    
    public static function getPopulation()
    {
        return count(Pokemons::$Pokemons);
    }

    public static function getRandomPokemon() {
        $randomPokemon = Pokemons::$Pokemons[rand(0, count(Pokemons::$Pokemons) - 1)];
        return $randomPokemon;
    }
}