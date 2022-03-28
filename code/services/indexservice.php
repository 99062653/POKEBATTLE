<?php
require "code/pokemons/pokemons.php";
require "code/pokemons/Pokemon.php";
require "code/pokemons/Pikachu.php";

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
$Charmender = new Pokemon("Charmender", "Fire", 100, 100, array("Ember", "Fire Spin"), array("Water", "Grass", "Fire"), array("Fighting", "Flying", "Ground"), "img/pokemon/charmender.png");
$Bulbasaur = new Pokemon("Bulbasaur", "Grass", 100, 100, array("Vine Whip", "Razor Leaf"), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/bulbasaur.png");

$Pokemons[] = $Pikachu;
$Pokemons[] = $Charmender;
