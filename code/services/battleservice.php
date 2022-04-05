<?php
$AllPokemons = New Pokemons;
$FriendlyPokemon = $AllPokemons->getPokemonByName($_GET["chosenpokemon"]);
$EnemyPokemon = $AllPokemons->getPokemonByName($_GET["enemypokemon"]);
$yourTurn = true;

if (isset($_POST["Action"])) {
    $FriendlyPokemon->attackPokemon($EnemyPokemon, $_POST["Attack"]);
    $yourTurn = false;
}