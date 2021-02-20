<?php 
/** @var Connection $connection */
$connection = require_once '../pdo.php';

//$form_data = $_POST;
//$insert = $connection->createPost($form_data);
//print_r($form_data);
/*$form_data = array(
    'title' => 'hehee',
    'img_url' => 'www.com'
    'description' => 'jejeeeje'
);*/

//store the entire post array($_POST) in the form data variable
$form_data = $_POST;
//creata a post
$insert = $connection->createPost($form_data);
?>