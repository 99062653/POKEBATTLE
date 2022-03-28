<?php 

class Pokemons {
    public static $Pokemons = array();
    
    public static function getPokemonbyName($name)
    {
        foreach (Pokemons::$Pokemons as $Pokemon) {
            if ($Pokemon->Name == $name) {
                return $Pokemon;
            }
        }
    }
}