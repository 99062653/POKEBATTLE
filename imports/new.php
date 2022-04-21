<div id="New">
    <header>
        <span>Maak je PoKéMoN **(WIP)**</span>
        <a id="BackButton" class="urls" href="index.php?page=choosepokemon">Terug</a>
        <button id="NewButton" class="urls" onclick="alert('der bestaan ' + <?= $AllPokemons->getPopulation(); ?> + ' pokemons')">getPopulation</button>
    </header>
    <form method="POST">
        <fieldset disabled="disabled"><!--  disable alles  -->
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
                    <input required type="text" name="Attacks" placeholder="Attacks">
                    <input required type="number" max="50" style="width: 50px;" name="AttackDamage" placeholder="0">
                    <a class="urls" onclick="addInput('Attacks')">+</a>
                </div>
                <div class="Input">
                    <label for="Weakness">Weakness</label>
                    <select name="Weakness">
                        <?php foreach (Pokemons::$EnergyTypes as $EnergyType) { ?>
                            <option value="<?= $EnergyType ?>"><?= $EnergyType ?></option>
                        <?php } ?>
                    </select>
                    <input required type="number" style="width: 50px;" name="WeaknessModifier" placeholder="0">
                </div>
                <div class="Input">
                    <label for="Resistance">Resistance</label>
                    <select name="Resistance">
                        <?php foreach (Pokemons::$EnergyTypes as $EnergyType) { ?>
                            <option value="<?= $EnergyType ?>"><?= $EnergyType ?></option>
                        <?php } ?>
                    </select>
                    <input required type="number" style="width: 50px;" name="ResistanceModifier" placeholder="0">
                </div>
                <div class="Input">
                    <label for="Image">Image</label>
                    <input required type="text" name="Image" placeholder="Image (url)">
                </div>
                <div class="Input">
                    <input class="urls" type="submit" value="Maak">
                </div>
            </div>
        </fieldset>
    </form>
</div>