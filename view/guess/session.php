<?php
namespace Anax\View;

use \Vihd14\Guess\Guess;
use \Vihd14\Guess\Session;

$session = new Session();

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?><h1>Gissa numret med SESSION</h1>

<?php
if (isset($_POST["guess"])) {
    $guess = new Guess($session->get("number"), $_POST["tries"]);
    $guess->guessNumber(htmlentities($_POST["guess"]));

    if ($guess->getGuesses() < 7) {
        echo "<h3>You have made <u>".$guess->getGuesses()."</u> guess(es).</h3>";
    }
} else {
    $guess = new Guess();
    echo "<h3><i>No guesses made.</i></h3>";
}

$session->set("number", $guess->getNumber());
$session->set("tries", $guess->getGuesses());
?>

<div class="hint" style="text-overflow: clip;">
    <h3>Hover here for a hint: <?= $guess->getNumber() ?></h3>
</div>

<form method="POST">
    <input type="hidden" name="tries" value="<?= 1 + $guess->getGuesses() ?>">
    <input type="number" name="guess">
    <input type="submit" value="Send">
</form>

<br>
<a href="session">Reset</a>
