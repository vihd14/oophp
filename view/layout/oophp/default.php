<?php

namespace Anax\View;

/**
 * A layout rendering views in defined regions.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?? "No title" ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php if (isset($favicon)) : ?>
    <link rel="icon" href="<?= asset("img/logo.png") ?>">
<?php endif; ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<?php foreach ($stylesheets as $stylesheet) : ?>
    <link rel="stylesheet" type="text/css" href="<?= asset($stylesheet) ?>">
<?php endforeach; ?>

</head>
<body>

<!-- navbar -->
<?php if (regionHasContent("navbar")) : ?>
<div class="outer-wrap outer-wrap-navbar">
    <div class="inner-wrap inner-wrap-navbar">
        <div class="row">
            <div class="wrap-navbar">
                <?php renderRegion("navbar") ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- header -->
<?php if (regionHasContent("header")) : ?>
<div class="outer-wrap outer-wrap-header">
    <div class="inner-wrap inner-wrap-header">
        <div class="row">
            <div class="wrap-header">
                <?php renderRegion("header") ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- main -->
<?php if (regionHasContent("main")) : ?>
<div class="outer-wrap outer-wrap-main">
    <div class="inner-wrap inner-wrap-main">
        <div class="row">
            <main class="wrap-main">
                <?php renderRegion("main") ?>
            </main>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- footer -->
<?php if (regionHasContent("footer")) : ?>
<div class="outer-wrap outer-wrap-footer">
    <div class="inner-wrap inner-wrap-footer">
        <div class="row">
            <div class="wrap-footer">
                <?php renderRegion("footer") ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php foreach ($javascripts as $javascript) : ?>
<script async src="<?= asset($javascript) ?>"></script>
<?php endforeach; ?>

</body>
</html>
