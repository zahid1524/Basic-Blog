<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body <?php body_class() ?>>
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h1><?php bloginfo('name'); ?></h1>
                <h3><?php bloginfo('description'); ?></h3>
            </div>
            <div class="blog-section">
                <?php 
                 while(have_posts()){
                     the_post();
                   ?>
                <div class="post" <?php post_class() ?>>
                    <div>
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail( 'full', ['class' => 'post-image', 'title' => 'Feature image']);
                        }?>
                    </div>
                    <div class="date-author">
                        <div class="date">
                            <h3><?php echo get_the_date('F j, Y');?></h3>
                        </div>
                        <div class="author">
                            <h3><?php the_author()?></h3>
                         </div>
                    </div>
                    <a href="<?php echo the_permalink()?>"><h2><?php the_title()?></h2></a>
                    <p><?php echo wp_trim_words( get_the_content(), 10, '...' );?></p>
                    <a class="read-more" href="<?php echo the_permalink()?>">Read more</a>
                </div>

                <?php
                 }
                ?>
            </div>
        </div>
    </div>
    <?php wp_footer() ?>
</body>
</html>