<?php
require "code/pokemons/init.php";

function loadRandomBG() {
    $backgrounds = array(
        "img/bg/arena.jpg",
        "img/bg/canyon.jpg",
        "img/bg/cave.jpg",
        "img/bg/city.jpg",
        "img/bg/coast.jpg",
        "img/bg/forest.jpg",
        "img/bg/glacier.jpg",
        "img/bg/volcano.jpg",
        "img/bg/cursed.jpg"); 
    $randombg = $backgrounds[array_rand($backgrounds)];

    return $randombg;
}

$yourTurn = true;
$FriendlyPokemon = $AllPokemons->getPokemonByName($_GET["chosenpokemon"]);
$EnemyPokemon = $AllPokemons->getPokemonByName($_GET["enemypokemon"]);