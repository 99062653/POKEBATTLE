<div id="Battle">
    <a id="CancelButton" class="urls" href="index.php">Cancel Battle</a>
    <div id="FriendlyPokemon">
        <div>
            <img class="PokemonImg" src="<?= $FriendlyPokemon->Image ?>" alt="<?= $FriendlyPokemon->Name ?>">
        </div>
        <div class="PokemonHealth">
            <p><?= $FriendlyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <?= $FriendlyPokemon->HitPoints ?> / <?= $FriendlyPokemon->Health ?></p>
        </div>
    </div>
    <div id="EnemyPokemon">
        <div>
            <img class="PokemonImg" src="<?= $EnemyPokemon->Image ?>" alt="<?= $EnemyPokemon->Name ?>">
        </div>
        <div class="PokemonHealth">
            <p><?= $EnemyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <?= $EnemyPokemon->HitPoints ?> / <?= $EnemyPokemon->Health ?></p>
        </div>
    </div>
    <div id="Attacks">
        <?php foreach ($FriendlyPokemon->Attacks as $Attack => $AttackDamage) { ?>
            <div class="Attack">
                <form method="POST">
                    <?php if ($yourTurn) { ?>
                        <button type="submit" value="<?= $AttackDamage ?>" name="Attack<?= $round ?>"><i class="fa-solid fa-burst"></i> <?= $Attack ?>: <?= $AttackDamage ?></button>
                    <?php } else { ?>
                        <button type="submit" value="NULL" name="Attack<?= $round ?>" disabled><i class="fa-solid fa-burst"></i> <?= $Attack ?>: <?= $AttackDamage ?></button>
                    <?php } ?>
                </form>
            </div>
        <?php } ?>
    </div>
</div>