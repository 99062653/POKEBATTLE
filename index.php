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
    <div id="Main" style="background-image: url(<?= loadRandomBG() ?>);">
        <?php
        if (isset($_GET["page"])) {
            switch ($_GET["page"]) {
                case "choosepokemon":
                    require "imports/choose.php";
                    break;

                case "newpokemon":
                    require "imports/new.php";
                    break;

                case "fightpokemon":
                    require "imports/battle.php";
                    break;
            }
        } else {
            require "imports/start.php";
        }
        ?>
    </div>
</body>
<script src="js/index.js"></script>
</html>