<?php 
/** @var Connection $connection */
$connection = require_once 'pdo.php';

//retrieving all posts
$blog_posts = $connection->retrievePosts();
//print_r($blog_posts);

//retrive a single post
$single_post = $connection->getPostById($_GET['p_id']);

//displaying posts with foreach
/*foreach($blog_posts as $post){
    echo ($post['id']);
    echo ($post['title']);
}*/
?>

<?php require "partials/header.php"; ?>

    <main class="blog-post-single">
        <div class="container">
            <h1 class="post-title wow fadeInUp">Blog Standard</h1>
            <div class="row">
                <!--This section is for a single blog post -->
                <div class="col-md-8 blog-post-wrapper">
                    <div class="post-header wow fadeInUp">
                        <img src=<?php echo $single_post['img_url']?> alt="blog post" class="post-featured-image">
                        <p class="post-date">January 29, 2020</p>
                    </div>
                    <div class="post-content wow fadeInUp">
                        <h4><?php echo $single_post['title'] ?></h4>
                        <p><?php echo $single_post['description'];?></p>
                        <blockquote class="blockquote wow fadeInUp">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        </blockquote>
    
                    </div>
                    <!-- end of blog post -->
                    <div class="post-tags wow fadeInUp">
                        <a href="#!" class="post-tag">Design Studio</a>
                        <a href="#!" class="post-tag">Creative Design</a>
                    </div>
                    <div class="post-navigation wow fadeInUp">
                        <button class="btn prev-post"> Prev Post</button>
                        <button class="btn next-post"> Next Post</button>
                    </div>
                    <div class="comment-section wow fadeInUp">
                        <h5 class="section-title">Leave a Reply</h5>
                        <form action="POST" class="oleez-comment-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="oleez-input" id="fullName" name="fullName" required>
                                    <label for="fullName">*Full name</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="oleez-input" id="fullName" name="email" required>
                                    <label for="email">*Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="message">*Message</label>
                                    <textarea name="message" id="message" rows="10" class="oleez-textarea" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
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