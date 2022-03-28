<?php
require "code/services/indexservice.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="http://fonts.cdnfonts.com/css/pokemon-solid" rel="stylesheet">
    <script src="https://kit.fontawesome.com/aaf588cef1.js" crossorigin="anonymous"></script>
    <title>PoKéBattle</title>
</head>
<body>
    <div id="Main" style="background-image: url(<?= $randombg ?>);">
    <?php  if (empty($_GET)) { ?>
            <div id="Start">
                <ul>
                    <li><a class="urls" href="index.php?choosepokemon">Spélén</a></li>
                    <li><a class="urls" href="https://github.com/99062653/POKEBATTLE" target="_blank">Github</a></li>
                </ul>
            </div>
        <?php } elseif (isset($_GET["choosepokemon"])) { ?>
            <div id="Choose">
                <header>
                    <a id="BackButton" class="urls" href="index.php">Terug</a>
                    <span>Kies je PoKéMoN</span>
                    <a id="NewButton" class="urls" href="index.php?newpokemon">Nieuw</a>
                </header>
                <div id="Inner-Choose">
                    <div id="Pokemons">
                        <?php foreach (Pokemons::$Pokemons as $Pokemon) { ?>
                            <a href="index.php?fightpokemon&chosenpokemon=<?= $Pokemon->Name ?>">
                                <div class="Pokemon">
                                    <h1><?= $Pokemon->Name ?></h1>
                                    <ul>
                                        <li><i class="fa-solid fa-heart"></i> <?= $Pokemon->Health ?></li>
                                        <li><i class="fa-solid fa-bolt-lightning"></i> <?= $Pokemon->EnergyType ?></li>
                                        <li><i class="fa-solid fa-burst"></i> <?= count($Pokemon->Attacks) ?> Attacks</li>
                                    </ul>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } elseif (isset($_GET["newpokemon"])) { ?>
            <div id="New">
                <header>
                    <span>Maak je PoKéMoN</span>
                    <a id="BackButton" class="urls" href="index.php?choosepokemon">Terug</a>
                </header>
                <form method="POST">
                    <div id="Inner-New">
                        <div class="Input">
                            <label for="Name">Naam</label>
                            <input required type="text" name="Name" placeholder="Naam">
                        </div>
                        <div class="Input">
                            <label for="EnergyType">Energie</label>
                            <select name="EnergyType">
                                <?php foreach (Pokemons::$EnergyTypes as $EnergyType) { ?>
                                    <option value="<?= $EnergyType ?>"><?= $EnergyType ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="Input">
                            <label for="Health">Health</label>
                            <input required type="number" max="80" name="Health" placeholder="Health">
                        </div>
                        <div class="Input">
                            <label for="Attacks">Attacks</label>
                            <input required type="text" name="Attacks" placeholder="Attacks"><input required type="number" max="50" style="width: 50px;" name="AttackDamage" placeholder="0">
                        </div>
                        <div class="Input">
                            <label for="Weakness">Weakness</label>
                            <select name="Weakness">
                                <?php foreach (Pokemons::$EnergyTypes as $EnergyType) { ?>
                                    <option value="<?= $EnergyType ?>"><?= $EnergyType ?></option>
                                <?php } ?>
                            </select><input required type="number" style="width: 50px;" name="WeaknessModifier" placeholder="0">
                        </div>
                        <div class="Input">
                            <label for="Resistance">Resistance</label>
                            <select name="Resistance">
                                <?php foreach (Pokemons::$EnergyTypes as $EnergyType) { ?>
                                    <option value="<?= $EnergyType ?>"><?= $EnergyType ?></option>
                                <?php } ?>
                            </select><input required type="number" style="width: 50px;" name="ResistanceModifier" placeholder="0">
                        </div>
                        <div class="Input">
                            <label for="Image">Image</label>
                            <input required type="text" name="Image" placeholder="Image (url)">
                        </div>
                        <div class="Input">
                            <input type="submit" value="Maak">
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>
</html>