<?php
/**
 * Autoloader for classes.
 *
 * @param string $class the name of the class.
 */
spl_autoload_register(function ($class) {
    $path = "{$class}.php";
    if (is_file($path)) {
        include($path);
    }
    //echo "loaded: ".$class."<br>";
});
