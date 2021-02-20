<?php
/** @var Connection $connection */
$connection = require_once 'pdo.php';

//retrieving all posts
$blog_posts = $connection->retrievePosts();
//print_r($blog_posts);

//displaying posts with foreach
/*foreach($blog_posts as $post){
    echo ($post['id']);
    echo ($post['title']);
}*/

//inserting into a database
/**$post = array(
    'title' => 'My third post',
    'description' => 'This is my third post'
);
$blog_post_insert = $connection->createPost($post);
echo'<pre>';
print_r($blog_posts);
echo'</pre>';
*/

//updating a table 
/**$id = 4;
$post = array(
    'title' => 'This is my updated second blog post ',
    'description' => 'blah blah blah'
);
$blog_post_update = $connection->updatePost($id,$post);
echo'<pre>';
print_r($blog_posts);
echo'</pre>';**/

//deleting a post
/*$id = 5;
$blog_post_delete = $connection->deletePost($id);
echo'<pre>';
print_r($blog_posts);
echo'</pre>';*/

//select post by ID
/*$id = 2;
$blog_post_select_by_id = $connection->getPostById($id);
echo'<pre>';
print_r($blog_post_select_by_id);
echo'</pre>';*/

?>