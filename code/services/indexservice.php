<?php
require "code/__init__.php";
shuffle(Pokemons::$Population); //random pokemons voor keuzes
$yourTurn = $FriendlyStartsFirst;

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
    if (!isset($_GET["enemypokemon"])) {
        setcookie("BG", $randomBG, time()+3600 , "/" ); // dit locked het achtergrondje
    }
    
    return $_COOKIE["BG"];
}

if (isset($_GET["chosenpokemon"]) && isset($_GET["enemypokemon"])) {
    $FriendlyPokemon = $AllPokemons->getPokemonByName($_GET["chosenpokemon"]);
    $EnemyPokemon = $AllPokemons->getPokemonByName($_GET["enemypokemon"]);

    actualBattle($FriendlyPokemon, $EnemyPokemon);
}

function actualBattle($friendlypokemon, $enemypokemon) {
	global $yourTurn;

    if ($yourTurn) {
        if (isset($_POST["Attack"])) {
            $friendlypokemon->attackPokemon($enemypokemon, $_POST["Attack"]);
            //unset($_POST["Attack"]);
        }
    }
    // if (!$yourTurn) {
    //     $enemypokemon->attackPokemon($friendlypokemon, $enemypokemon->Attacks[array_rand($enemypokemon->Attacks)]);
    //     $yourTurn = true;
    // }
}
