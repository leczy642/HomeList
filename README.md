# PHP_CMS_App

# App configuration
In this section you will learn how to configure the PHP_CMS_App. The app is built using PHP and MySQL and is still under continous development.
This application was built using both OOP and MVC design patterns

# App structure
PHP_CMS App has the following directory structure

    /assets
    /controllers
        add_post_controller.php 
        delete_post_controller.php
        update_post_controller.php 

    /models
        pdo.php 
    /partials
        header.php
        footer.php
        admin_header.php

    add_post.php
    admin_index.php
    update_post.php
    view_post.php

# Basic setup
To continue with this point you need a basic understanding of MySQL. 
```
* create a database called 'blog'
* create a table known as 'blog'
* inside the table create fields id, title, description, img_url, create_date
* copy the application folder into the server directory eg. htdocs
* run the application by typing the application url 
```
