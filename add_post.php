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

?>

<?php require "partials/admin_header.php"; ?>


    <main class="contact-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Adding a new post</h1>
            <div class="row">
                
                <div class="col-md-6 pl-lg-5 wow fadeInRight">
                    <form action="./controllers/add_post_controller.php" method = "POST" class="oleez-contact-form">
                        <div class="form-group">
                            <input type="text" class="oleez-input" id="title" name="title" required>
                            <label for="blog_title">Title</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="oleez-input" id="img_url" name="img_url" required>
                            <label for="img_url">Image Url</label>
                        </div>
                        <div class="form-group">
                            <label for="blog_description">Description</label>
                            <textarea name="description" id="description" rows="10" class="oleez-textarea" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    

<?php require "partials/footer.php"; ?>