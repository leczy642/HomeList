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


<?php // the header file has been moved to the partials folder?>
<?php require "partials/header.php"; ?>

    <main class="blog-standard">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Latest Posts</h1>
            <div class="row">
                    <div class="col-md-8">
                        <!--start of articles -->
                        <?php foreach($blog_posts as $posts): ?>
                        <article class="blog-post wow fadeInUp">
                            <img src=<?php echo $posts['img_url']; ?> alt="blog post" class="post-thumbnail"/>
                            <p class="post-date"><?php echo $posts['create_date']; ?></p>
                            <h4 class="post-title"><?php echo $posts['title']; ?></h4>
                            <p class="post-excerpt"><?php echo(substr($posts['description'],0,300).'...'); ?> </p>
                            <a href=<?php echo ("./view_post.php?p_id=".$posts['id']); ?> class="post-permalink">READ MORE</a>
                        </article>
                        <?php endforeach; ?>
                        <!--end of article -->

                        <nav class="oleez-pagination wow fadeInUp">
                            <a href="#!" class="active">01</a>
                            <a href="#!">02</a>
                            <a href="#!">03</a>
                            <a href="#!" class="next">&rarr;</a>
                        </nav>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar-widget wow fadeInUp">
                            <h5 class="widget-title">Tags</h5>
                            <div class="widget-content">
                                <a href="#!" class="post-tag">Design Studio</a>
                                <a href="#!" class="post-tag">Creative Design</a>
                                <a href="#!" class="post-tag">Marketing</a>
                                <a href="#!" class="post-tag">Typography</a>
                                <a href="#!" class="post-tag">Team</a>
                                <a href="#!" class="post-tag">Project</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
    </main>
    
    <?php require "partials/footer.php"; ?>    
    