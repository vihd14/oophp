<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?>

<!-- NAVBAR <?= __FILE__ ?> <br> -->

<navbar class="navbar">
    <a href="<?= url("") ?>"><img src="img/logo.png" alt="Logo"></a>
    <a href="<?= url("") ?>">Hem</a>
    <a href="<?= url("redovisning") ?>">Redovisning</a>
    <a href="<?= url("om") ?>">Om</a>
    <a href="<?= url("test") ?>">Test</a>
    <a href="<?= url("debug") ?>">Debug</a>
</navbar>
