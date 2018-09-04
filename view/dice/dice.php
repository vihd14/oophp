<?php
namespace Vihd14\Dice;

$playerPoints = 0;
$playerTurnPoints = 0;
$computerPoints = 0;
$computerTurnPoints = 0;

// Saving important data into $_SESSION.
if (isset($_POST["create"])) {
    $this->di->get("session")->set("game", $game);
    $this->di->get("session")->set("create", $_POST["create"]);
    $this->di->get("session")->set("name", $_POST["name"]);

    $this->di->get("session")->set("playerPoints", $playerPoints);
    $this->di->get("session")->set("computerPoints", $computerPoints);
}

if (isset($_POST["start"])) {
    $this->di->get("session")->set("start", $_POST["start"]);
}

if (isset($_POST["roll"])) {
    $this->di->get("session")->set("roll", $_POST["roll"]);
}

if (isset($_POST["computerRoll"])) {
    $this->di->get("session")->set("computerRoll", $_POST["computerRoll"]);
}

if (isset($_POST["save"])) {
    $playerPoints = $this->di->get("session")->get("playerPoints") + $_POST["playerTurnPoints"];
    $this->di->get("session")->set("playerPoints", $playerPoints);
    unset($_SESSION["roll"]);
}


if (isset($_SESSION["create"])) {
    $name = "";
    $name = $this->di->get("session")->get("name");
    $player = $name;
    echo "<br>Spelare 1: ", $name;
    echo "<br>Spelare 2: Datorn<br>";
    echo "<b>Poäng för ", $name . ": " . $this->di->get("session")->get("playerPoints") . "</b><br>";
    echo "<b>Poäng för datorn: ", $this->di->get("session")->get("computerPoints") . "</b><br>";

    $game = $this->di->get("session")->get("game");

    if (!isset($_SESSION["start"])) {
        ?><p>
            Varje spelare kastar två (2) tärningar åt gången. Efter varje kast kan man välja att fortsätta kasta eller
            spara sina poäng och låta omgången gå vidare till nästa spelare. Om man kastar en etta (1) nollställs poängen
            för den aktiva rundan.
        </p>
        <p>Första spelaren som når en total poäng av 100 blir vinnaren av spelet.</p>

        <form method="POST">
            <input type="submit" name="start" value="Starta spelet">
        </form>
        <?php
    }
    ?><br><a class="reset" href="dice/reset">Starta om spelet</a>
    <p style="border-bottom: solid 1px black;"></p><?php
} else {
    ?>
    <p>
        Välkommen till spelet Dice 100! Börja med att fylla i ditt namn i fältet nedan för att skapa din spelare.
    </p>
    <form method="POST">
        <p style="font-size: 80%;">Namn på spelaren:</p>
        <input type="text" name="name">
        <input type="submit" name="create" value="Skapa">
    </form><br>
    <?php
}

?><div class="dice-container"><?php
if (isset($_SESSION["start"])) {
    if (!isset($_SESSION["roll"])) {
        if ($this->di->get("session")->get("playerPoints") < 100) {
            ?><form method="POST">
                <input type="hidden" name="playerTurnPoints" value="<?= $playerTurnPoints ?>">
                <input type="submit" name="roll" value="Kasta dina tärningar">
            </form><?php
        }
    }

    ?><div class="player">
    <?php if (isset($_SESSION["roll"])) {
        $playerTurnPoints = $_POST["playerTurnPoints"];
        echo "<br>Du slog: ";
        $game->playerRoll();
        $playerTurnPoints += array_sum($game->getPlayerPoints());

        if (array_sum($game->getPlayerPoints()) == 0) {
            echo "Du slog en etta (1) och fick 0 poäng i den här rundan.<br><br>";
            ?><form method="POST">
                <?php unset($_SESSION["roll"]); ?>
                <input type="submit" name="computerRoll" value="Kasta datorns tärningar">
            </form>
        <?php } else {
            ?>
            <form method="POST">
                <br>
                <input type="hidden" name="playerTurnPoints" value="<?= $playerTurnPoints ?>">
                <input type="submit" name="roll" value="Kasta igen">
                <input type="submit" name="save" value="Spara poäng">
            </form>
        <?php }

        echo "<br><b>Din poäng för rundan: ", $playerTurnPoints . "</b>";
    }?></div>

    <?php if (isset($_POST["save"]) || isset($_SESSION["computerRoll"])) {
        if ($this->di->get("session")->get("computerPoints") < 100) {
            if ($this->di->get("session")->get("playerPoints") < 100) {
                ?><div class="computer"><?php
                echo "<br>Datorn slog: ";
                $game->computerRoll();
                $computerTurnPoints = array_sum($game->getComputerPoints());

                echo "<br><b>Datorns poäng för rundan: ", $computerTurnPoints . "</b>";
                $computerPoints = $this->di->get("session")->get("computerPoints") + $computerTurnPoints;
                $this->di->get("session")->set("computerPoints", $computerPoints);
                unset($_SESSION["computerRoll"]);
                ?></div><?php
            }
        }
    }
}
?></div>
<div class="winner">
<?php if ($this->di->get("session")->get("computerPoints") >= 100) {
    unset($_SESSION["roll"]);
    unset($_SESSION["computerRoll"]);
    ?>
    <h2>
        Vinnaren blev datorn! Bättre lycka nästa gång...<br>
        Klicka <a href="dice/reset">här</a> för att starta ett nytt spel.
    </h2>
    <?php
} elseif ($this->di->get("session")->get("playerPoints") >= 100) {
    unset($_SESSION["roll"]);
    unset($_SESSION["computerRoll"]);
    ?>
    <h2>
        Du vann! Grattis!<br>
        Klicka <a href="dice/reset">här</a> för att starta ett nytt spel.
    </h2>
    <?php
}?>
</div>
</p><?php
