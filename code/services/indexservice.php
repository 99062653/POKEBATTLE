<?php
require "code/__init__.php";
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

    return $randomBG;
}

if (isset($_GET["chosenpokemon"]) && isset($_GET["enemypokemon"])) {
    $FriendlyPokemon = $AllPokemons->getPokemonByName($_GET["chosenpokemon"]);
    $EnemyPokemon = $AllPokemons->getPokemonByName($_GET["enemypokemon"]);

    actualBattle();
}

function actualBattle() {
	global $yourTurn;
    global $FriendlyPokemon;
    global $EnemyPokemon;

	if ($yourTurn) {
		if (isset($_POST["Action"])) {
            //$FriendlyPokemon.attackPokemon($EnemyPokemon, $_POST["Attack"]);
		}
	}
}
