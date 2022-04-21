<div id="Choose">
    <header>
        <a id="BackButton" class="urls" href="index.php">Terug</a>
        <span>Kies je PoKéMoN</span>
        <a id="NewButton" class="urls" href="index.php?page=newpokemon">Nieuw</a>
    </header>
    <div id="Inner-Choose">
        <div id="Pokemons">
            <?php foreach (Pokemons::$Population as $Pokemon) {
                $Amount--;
                if ($Amount == 0) break;
            ?>
                <?php if (isset($_GET["chosenpokemon"])) {
                    if ($_GET["chosenpokemon"] != $Pokemon->Name) { ?>
                        <a href="index.php?page=fightpokemon&chosenpokemon=<?= $_GET["chosenpokemon"] ?>&enemypokemon=<?= $Pokemon->Name ?>">
                        <?php } else { ?>
                            <a onclick="alert('Je hebt deze pokemon al gekozen.')">
                            <?php }
                    } else { ?>
                        <a href="index.php?page=choosepokemon&chosenpokemon=<?= $Pokemon->Name ?>">
                    <?php } ?>
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