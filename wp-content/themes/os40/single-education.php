<?php get_header(); ?>
<div class="container">
<?php
    if(have_posts()){
        while(have_posts()){ the_post(); ?>
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_title(); ?></h2>
                    <h3><?php echo get_field('start_date'); ?> -- <?php echo get_field('end_date'); ?></h3>
                    <h4><?php echo get_field('place'); ?></h4>
                    <h5>GPA : <?php echo get_field('gpa'); ?></h5>
                </div>
            </div>
        <?php
            }
        }
        ?>
        
</div>   
<?php get_footer(); ?>