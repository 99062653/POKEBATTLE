<?php
$AllPokemons = New Pokemons;

$FriendlyPokemon = $AllPokemons->getPokemonByName($_GET["chosenpokemon"]);
$EnemyPokemon = $AllPokemons->getPokemonByName($_GET["enemypokemon"]);


if (isset($_POST["Attack"])) {
    $FriendlyPokemon->attackPokemon($EnemyPokemon, 50);
}