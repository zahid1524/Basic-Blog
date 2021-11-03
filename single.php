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
                <a href="//localhost/test/"><h1><?php bloginfo('name'); ?></h1></a>
                <h3><?php bloginfo('description'); ?></h3>
            </div>
                <?php 
                 while(have_posts()){
                     the_post();
                   ?>
                <div class="single-post" <?php post_class() ?>>
                    <div>
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail( 'full', ['class' => 'single-post-image', 'title' => 'Feature image']);
                        }?>
                    </div>
                    <div class="single-post-date-author">
                        <div class="date">
                            <h3><?php echo get_the_date('F j, Y');?></h3>
                        </div>
                        <div class="author">
                            <h3><?php the_author()?></h3>
                         </div>
                    </div>
                   <h2><?php the_title()?></h2>
                    <p><?php the_content();?></p>
                </div>

                <?php
                 }
                ?>
                <div class="comments">
                     <?php comments_template()?>

                </div>
            </div>
    </div>
    <?php wp_footer() ?>
</body>
</html>