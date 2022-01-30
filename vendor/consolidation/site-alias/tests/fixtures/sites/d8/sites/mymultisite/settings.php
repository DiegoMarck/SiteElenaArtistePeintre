<?php

if (isset($GLOBALS['request']) and
'/subdirectory/index.php' === $GLOBALS['request']->server->get('SCRIPT_NAME')) {
$GLOBALS['request']->server->set('SCRIPT_NAME', '/index.php');
};
