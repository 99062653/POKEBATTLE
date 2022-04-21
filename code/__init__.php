<?php
require "code/pokemons/pokemons.php";
require "code/pokemons/Pokemon.php";
require "code/pokemons/Pikachu.php";

//default pokemons 
//voor Pikachu express een nieuwe class gemaakt om mijn skills te showen
$Amount = 8; // aantal pokemons op de choose pagina
$FriendlyStartsFirst = true; // of de friendly pokemon de eerste aan de beurt is
$yourTurn = $FriendlyStartsFirst; // extra variable voor duidelijkheid

$AllPokemons = new Pokemons; // pokemons class is gericht op alle pokemons terwijl de pokemon class gericht op 1 specifieke pokemon

$Pikachu = new Pikachu("Pikachu", "Electric", 100, array("Thunderbolt" => 30, "Quick Attack" => 25, "Thunder Shock" => 35), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/pikachu.png");
$Charmander = new Pokemon("Charmander", "Fire", 100, array("Ember" => 40, "Fire Spin" => 20), array("Water", "Grass", "Fire"), array("Fighting", "Flying", "Ground"), "img/pokemon/charmander.png");
$Bulbasaur = new Pokemon("Bulbasaur", "Grass", 100, array("Vine Whip" => 30, "Razor Leaf" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/bulbasaur.png");
$Snorlax = new Pokemon("Snorlax", "Normal", 120, array("Headbutt" => 35, "Hyper Beam" => 50), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/snorlax.png");

$Magikarp = new Pokemon("Magikarp", "Water", 100, array("Splash" => 20), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/magikarp.png");
$Squirtle = new Pokemon("Squirtle", "Water", 100, array("Bubble" => 30, "Water Gun" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/squirtle.png");
$Pidgey = new Pokemon("Pidgey", "Normal", 100, array("Gust" => 30, "Quick Attack" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/pidgey.png");
$Rattata = new Pokemon("Rattata", "Normal", 100, array("Tackle" => 30, "Quick Attack" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/rattata.png");

$Eevee = new Pokemon("Eevee", "Normal", 100, array("Quick Attack" => 30, "Tackle" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/eevee.png");
$Charizard = new Pokemon("Charizard", "Fire", 100, array("Ember" => 40, "Fire Spin" => 20), array("Water", "Grass", "Fire"), array("Fighting", "Flying", "Ground"), "img/pokemon/charizard.png");
$Blastoise = new Pokemon("Blastoise", "Water", 100, array("Water Gun" => 30, "Hydro Pump" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/blastoise.png");
$Arbok = new Pokemon("Arbok", "Poison", 100, array("Bite" => 30, "Poison Fang" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/arbok.png");

$Sandslash = new Pokemon("Sandslash", "Ground", 100, array("Sand Attack" => 30, "Slash" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/sandslash.png");
$Nidoking = new Pokemon("Nidoking", "Poison", 100, array("Poison Jab" => 30, "Earthquake" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/nidoking.png");
$Nidoqueen = new Pokemon("Nidoqueen", "Poison", 100, array("Poison Jab" => 30, "Earthquake" => 25), array("Fire", "Water", "Electric"), array("Fighting", "Flying", "Ground"), "img/pokemon/nidoqueen.png");
$Vulpix = new Pokemon("Vulpix", "Fire", 100, array("Ember" => 40, "Fire Spin" => 20), array("Water", "Grass", "Fire"), array("Fighting", "Flying", "Ground"), "img/pokemon/vulpix.png");