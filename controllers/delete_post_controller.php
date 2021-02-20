<?php

/** @var Connection $connection */
$connection = require_once '../pdo.php';

//p_id stands for post id..
$p_id = $_GET['p_id'];

//the deletrPost takes in the post_id of the post to delete
$delete = $connection->deletePost($p_id);



?>