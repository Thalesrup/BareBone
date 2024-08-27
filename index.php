<?php

header('Content-Type: application/json');

require __DIR__ . '/autoload.php';

use BareBone\Application\Controller\MainController;

$main = new MainController();

return $main->Echo('BareBone is alive');