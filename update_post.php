<?php
/** @var Connection $connection */
$connection = require_once 'pdo.php';

//retrieving all posts
$blog_posts = $connection->retrievePosts();
//print_r($blog_posts);

//retrive a single post
$data_post = $connection->getPostById($_GET['p_id']);


//displaying posts with foreach
/*foreach($blog_posts as $post){
    echo ($post['id']);
    echo ($post['title']);
}*/

?>

<?php require "partials/admin_header.php"; ?>

    <main class="contact-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Update post</h1>
            <div class="row">
                <div class="col-md-6 pl-lg-5 wow fadeInRight">
                    <form action="./controllers/update_post_controller.php" method = "POST" class="oleez-contact-form">
                        <input type="hidden" name="id" value =<?php echo $data_post['id']?> >
                        <div class="form-group">
                            <input type="text" class="oleez-input" id="title" name="title" value="" required>
                            <label for="blog_title"><?php echo $data_post['title']?></label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="oleez-input" id="img_url" name="img_url" value=<?php echo $data_post['img_url'];?> required>
                            <label for="img_url">Image Url</label>
                        </div>
                        <div class="form-group">
                            <label for="blog_description">Description</label>
                            <textarea name="description" id="description" rows="10" class="oleez-textarea" required><?php echo $data_post['description'];?></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <?php require "partials/footer.php"; ?>