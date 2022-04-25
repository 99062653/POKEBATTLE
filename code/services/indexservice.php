<?php
require "code/__init__.php";

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

    $randomBG = $backgrounds[array_rand($backgrounds)];
    if (!$_GET || $_GET["page"] != "fightpokemon") { // !GET zodat BG werkt op de startpagina
        setcookie("BG", $randomBG, time()+3600 , "/" ); // dit locked het achtergrondje
    }

    return $_COOKIE["BG"];
}

function Battle() {
    global $AllPokemons;
    global $FriendlyPokemon;
    global $EnemyPokemon;
    global $round;

    $FriendlyAttacks = [];
    $EnemyAttacks = [];
    $FriendlyPokemon = $AllPokemons->getPokemonByName($_GET["chosenpokemon"]);
    $EnemyPokemon = $AllPokemons->getPokemonByName($_GET["enemypokemon"]);

    
    if (isset($_POST["Attack" . $round])) {
        $FriendlyAttacks[$round] = $_POST["Attack" . $round];
    }

    foreach ($FriendlyAttacks as $Attack) {
        $EnemyPokemon->HitPoints -= $Attack;
    }

    var_dump($_POST);
}