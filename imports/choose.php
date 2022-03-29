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