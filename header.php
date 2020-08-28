<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom theme</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="blog-masthead">
            <nav class="blog-nav bg-dark p-3 mx-0">
            <?php wp_nav_menu( ['menu_class'=>'row d-flex justify-content-around list-unstyled my-3', 'theme_location' => 'main_menu'] ); ?>
              <!--  <a class="blog-nav-item active" href="#">Home</a>
                <a class="blog-nav-item" href="#">News</a>
                <a class="blog-nav-item" href="#">About</a> -->
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="blog-header">
                <h1>
                    <a href="<?php echo get_bloginfo('wpurl');?>">
                    <?php echo get_bloginfo('name');?>
                    </a>
                </h1>
                <p class="blog-description lead"><?php echo get_bloginfo('description');?></p>
            </div>
        </div>
    