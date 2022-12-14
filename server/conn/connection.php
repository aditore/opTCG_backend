<?php
// must require dirname of file in root in order to pull from the env
// dirname() takes an integer as the second argument to find the root
require dirname(__DIR__, 2) . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->safeLoad();
  # needs connection to env still (in process)  
    echo '<h1> My username is ' . $_ENV['USER'] . '! </h1>';

##MYSQL INFO NEXT

$conn = new mysqli($_ENV['SERVER'], $_ENV['USER'], $_ENV['PASSWORD'], $_ENV['DB']);

echo '<h2> Logged in! </h2>';
?>