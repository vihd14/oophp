<?php
namespace Vihd14\Dice;

/**
 * Dice game specific routes.
 */

// $session = new \Anax\Session\Session();

$app->router->any(["GET", "POST"], "dice", function () use ($app) {
    $game = new DiceGame();

    $data = [
        "title" => "Tärningsspel - Viza",
        "game" => $game
    ];

    $app->view->add("dice/dice", $data);
    $app->page->render($data);
});

$app->router->any(["GET", "POST"], "dice/reset", function () use ($app) {
    $app->session->destroy();
    $app->response->redirect("dice");
});
