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


    <!--Blog grid page-->
    <main class="blog-grid-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Edit Posts</h1>
            <div class="row">
                <!--output all the elements from the blog table-->
                <?php foreach($blog_posts as $posts): ?>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <!--retrieve the image url -->
                            <img src=<?php echo $posts['img_url']; ?> alt="blog">
                        </div>
                        <p class="blog-post-date"><?php echo $posts['create_date']; ?></p>
                        <?php//$p_id stands for post id ?>
                        <a href=<?php echo ("./view_post.php?p_id=".$posts['id']); ?> ><h5 class="blog-post-title"><?php echo $posts['title']; ?></a></h5>
                        <a href=<?php echo ("./update_post.php?p_id=".$posts['id']); ?> class="post-permalink">UPDATE&rarr;</a>
                        <a href=<?php echo ("./controllers/delete_post_controller.php?p_id=".$posts['id']); ?> class="post-permalink">DELETE</a>
                        
                    </div>
                </div>
                <?php endforeach; ?>
               

                
            </div>
            <div class="row">
                <div class="col-12 pb-5 mb-5">
                        <nav class="oleez-pagination d-flex align-items-center justify-content-center wow fadeInUp">
                            <a href="#!" class="active">01</a>
                            <a href="#!">02</a>
                            <a href="#!">03</a>
                            <a href="#!" class="next">&rarr;</a>
                        </nav>
                </div>
            </div>
        </div>
    </main>
<!--End of Blog grid page-->

    

<?php require "partials/footer.php"; ?>