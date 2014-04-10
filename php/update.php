<?php

include_once('instances.php');

$game->setListShip($_POST['data']);

echo json_encode($game->getListShip());

?>
