<?php

$jsonDiscList = file_get_contents('./database/dischi.json');

header('Content-Type: application/json');
echo $jsonDiscList;

?>