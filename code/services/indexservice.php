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

//default pokemons 
//voor Pikachu express een nieuwe class gemaakt om mijn skills te showen
$AllPokemons = new Pokemons;
$Pikachu = new Pikachu("Pikachu", "Electric", 100, array("Thunderbolt" => 30, "Quick Attack" => 25, "Thunder Shock" => 35), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/pikachu.png");
$Charmender = new Pokemon("Charmander", "Fire", 100, array("Ember" => 40, "Fire Spin" => 20), array("Water", "Grass", "Fire"), array("Fighting", "Flying", "Ground"), "img/pokemon/charmander.png");
$Bulbasaur = new Pokemon("Bulbasaur", "Grass", 100, array("Vine Whip" => 30, "Razor Leaf" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/bulbasaur.png");
$Snorlax = new Pokemon("Snorlax", "Normal", 120, array("Headbutt" => 35, "Hyper Beam" => 50), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/snorlax.png");

$FriendlyPokemon = $AllPokemons->getPokemonByName($_GET["chosenpokemon"]);
$EnemyPokemon = $AllPokemons->getPokemonByName($_GET["enemypokemon"]);
