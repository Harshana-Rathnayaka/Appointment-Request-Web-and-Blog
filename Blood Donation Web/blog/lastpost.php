<?php

include 'login/connection.php';
$last=$db->query("SELECT * FROM Posts ORDER BY P_ID DESC");
$getlast=$last->fetch_assoc();
$lastID=$getlast['P_ID'];

?>