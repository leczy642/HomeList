<?php 
/** @var Connection $connection */
$connection = require_once '../pdo.php';
//$post_data is the data from a single post
$post_data = $_POST;
//$post_id is the id of a single post
$post_id = $_POST['id'];
//the update takes two paramters,the post id and the post array ($_POST)
$update = $connection->updatePost($post_id,$post_data);
?>