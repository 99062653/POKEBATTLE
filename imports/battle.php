<?php
require "code/services/battleservice.php";
?>

<div id="Battle">
    <div id="FriendlyPokemon">
        <img class="PokemonImg" src="<?= $FriendlyPokemon->Image ?>" alt="<?= $FriendlyPokemon->Name ?>">
        <div class="PokemonHealth">
            <p><?= $FriendlyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <?= $FriendlyPokemon->HitPoints ?> / <?= $FriendlyPokemon->Health ?></p>
        </div>
    </div>
    <div id="EnemyPokemon">
        <img class="PokemonImg" src="<?= $EnemyPokemon->Image ?>" alt="<?= $EnemyPokemon->Name ?>">
        <div class="PokemonHealth">
            <p><?= $EnemyPokemon->Name ?>: <i class="fa-solid fa-heart"></i> <?= $EnemyPokemon->HitPoints ?> / <?= $EnemyPokemon->Health ?></p>
        </div>
    </div>
    <div id="Attacks">
        <?php foreach ($FriendlyPokemon->Attacks as $Attack => $AttackDamage) { ?>
            <div class="Attack">
                <form method="POST">
                    <input type="hidden" name="Action" value="submit" />
                    <?php if ($yourTurn) { ?>
                        <button type="submit" value="<?= $AttackDamage ?>" name="Attack"><i class="fa-solid fa-burst"></i> <?= $Attack ?>: <?= $AttackDamage ?></button>
                    <?php } else { ?>
                        <button type="submit" value="<?= $AttackDamage ?>" name="Attack" disabled><i class="fa-solid fa-burst"></i> <?= $Attack ?>: <?= $AttackDamage ?></button>
                    <?php } ?>
                </form>
            </div>
        <?php } ?>
    </div>
</div>