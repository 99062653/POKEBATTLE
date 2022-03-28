<?php
require "code/pokemons/Pokemon.php";
require "code/pokemons/Pikachu.php";

$Pokemons = array();
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

$Pikachu = new Pikachu("Pikachu", "Electric", 100, 100, array("Thunderbolt", "Quick Attack", "Thunder Shock"), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/pikachu.png");

$Pokemons[] = $Pikachu;