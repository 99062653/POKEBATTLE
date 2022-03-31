<?php
require "code/services/battleservice.php";
?>

<div id="Battle">
    <div id="FriendlyPokemon">
        <img class="PokemonImg" src="<?= $FriendlyPokemon->Image ?>" alt="<?= $FriendlyPokemon->Name ?>">
        <div class="PokemonHealth">
        <?php if ($FriendlyPokemon->HitPoints == $FriendlyPokemon->Health) { ?>
                <p><?= $FriendlyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <?= $FriendlyPokemon->HitPoints ?> / <?= $FriendlyPokemon->Health ?></p>
            <?php } elseif ($FriendlyPokemon->HitPoints <= $FriendlyPokemon->Health / 2) { ?>
                <p><?= $FriendlyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <span class="dangerous"><?= $FriendlyPokemon->HitPoints ?></span> / <?= $FriendlyPokemon->Health ?></p>
            <?php } elseif ($FriendlyPokemon->HitPoints <= $FriendlyPokemon->Health / 3) { ?>
                <p><?= $FriendlyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <span class="superdangerous"><?= $FriendlyPokemon->HitPoints ?></span> / <?= $FriendlyPokemon->Health ?></p>
            <?php } ?>
        </div>
    </div>
    <div id="EnemyPokemon">
        <img class="PokemonImg" src="<?= $EnemyPokemon->Image ?>" alt="<?= $EnemyPokemon->Name ?>">
        <div class="PokemonHealth">
            <?php if ($EnemyPokemon->HitPoints == $EnemyPokemon->Health) { ?>
                <p><?= $EnemyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <?= $EnemyPokemon->HitPoints ?> / <?= $EnemyPokemon->Health ?></p>
            <?php } elseif ($EnemyPokemon->HitPoints <= $EnemyPokemon->Health / 2) { ?>
                <p><?= $EnemyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <span class="dangerous"><?= $EnemyPokemon->HitPoints ?></span> / <?= $EnemyPokemon->Health ?></p>
            <?php } elseif ($EnemyPokemon->HitPoints <= $EnemyPokemon->Health / 3) { ?>
                <p><?= $EnemyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <span class="superdangerous"><?= $EnemyPokemon->HitPoints ?></span> / <?= $EnemyPokemon->Health ?></p>
            <?php } ?>
        </div>
    </div>
    <div id="Visuals">

    </div>
    <div id="Attacks">
        <?php foreach ($FriendlyPokemon->Attacks as $Attack => $AttackDamage) { ?>
            <div class="Attack">
                <form method="POST" name="Attack">
                    <button type="submit" value="<?= $AttackDamage ?>" name="Attack"><i class="fa-solid fa-burst"></i> <?= $Attack ?>: <?= $AttackDamage ?></button>
                </form>
            </div>
        <?php } ?>
    </div>
</div>