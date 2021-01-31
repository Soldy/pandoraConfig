<?php

require __DIR__ . "/../vendor/autoload.php";

use Pandora\Config\PandoraConfigClass;

$config = new PandoraConfigClass();
echo(
    $config->get('testName')
);
echo("\n");


