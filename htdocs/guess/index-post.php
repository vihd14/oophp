<!doctype html>
<title>Guess the number (POST)</title>
<h1>Guess the number using POST</h1>

<?php
require "config.php";
require "style.php";

if (isset($_POST["number"])) {
    // Create an instance of the class
    $guess = new Guess($_POST["number"], $_POST["tries"]);
} else {
    $guess = new Guess();
}

if (isset($_POST["guess"])) {
    $guess->guessNumber(htmlentities($_POST["guess"]));
    if ($guess->getGuesses() < 7) {
        echo "<h3>You have made <u>".$guess->getGuesses()."</u> guess(es).</h3>";
    }
} else {
    echo "<h3><i>No guesses made.</i></h3>";
}
?>

<div class="hint" style="text-overflow:clip;">
    <h3>Hover here to get a hint: <?= $guess->getNumber() ?></h3>
</div>

<form method="POST">
    <input type="hidden" name="number" value="<?= $guess->getNumber() ?>">
    <input type="hidden" name="tries" value="<?= 1 + $guess->getGuesses() ?>">
    <input type="number" name="guess">
    <input type="submit" value="Send">
</form>
<br>
<a href="index-post.php">Reset</a>
