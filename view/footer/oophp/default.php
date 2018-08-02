<?php

namespace Anax\View;

/**
 * Template file to render a view.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?>
<div class="footer-element signatur">
    <img src="<?= asset("img/signatur.png") ?>" alt="Signatur">
</div>
<div class="footer-element">
    <h3>Socialt</h3>
    <a href="https://github.com/vihd14/oophp"><i class="fab fa-github"></i></a>
    <a href="https://www.facebook.com/viktoria.haapaoja"><i class="fab fa-facebook-square"></i></a>
    <a href="https://www.instagram.com/wiktoryyaa/"><i class="fab fa-instagram"></i></a>
    <a href="https://www.linkedin.com/in/viktoria-haapaoja-aa044a10a/"><i class="fab fa-linkedin"></i></a>
</div>
<div class="footer-element">
    <h3>Länkar</h3>
    <a href="https://dbwebb.se/">Dbwebb</a><br>
    <a href="https://dbwebb.se/kurser/oophp-v4/">OOPHP hos Dbwebb</a>
</div>
<div class="footer-element">
    <h3>Redovisningar</h3>
    <a href="<?= url("redovisning#kmom01") ?>">Kmom01</a><br>
    <a href="<?= url("redovisning#kmom02") ?>">Kmom02</a><br>
    <a href="<?= url("redovisning#kmom03") ?>">Kmom03</a><br>
    <a href="<?= url("redovisning#kmom04") ?>">Kmom04</a><br>
    <a href="<?= url("redovisning#kmom05") ?>">Kmom05</a><br>
    <a href="<?= url("redovisning#kmom06") ?>">Kmom06</a><br>
    <a href="<?= url("redovisning#kmom0710") ?>">Kmom07-10</a>
</div>
