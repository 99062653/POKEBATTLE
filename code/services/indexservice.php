<?php
require "code/__init__.php";
$yourTurn = true;
$FriendlyPokemon;
$EnemyPokemon;

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
        "img/bg/cursed.jpg"
    ); 
    
    return $backgrounds[array_rand($backgrounds)];
}

function actualBattle($friendlypokemon, $enemypokemon) {
    
}

if (isset($_GET["chosenpokemon"]) && isset($_GET["enemypokemon"])) {
    $FriendlyPokemon = $AllPokemons->getPokemonByName($_GET["chosenpokemon"]);
    $EnemyPokemon = $AllPokemons->getPokemonByName($_GET["enemypokemon"]);

    actualBattle($FriendlyPokemon, $EnemyPokemon);
}