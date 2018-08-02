<?php
/**
 * Guess game specific routes.
 */
//var_dump(array_keys(get_defined_vars()));



/**
 * Guess my number.
 */
$app->router->get("gissa/session", function () use ($app) {
    $data = [
        "title" => "Gissa numret (SESSION) - Viza"
    ];

    $app->view->add("guess/session", $data);
    $app->page->render($data);
});
