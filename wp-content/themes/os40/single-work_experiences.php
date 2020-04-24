<?php get_header(); ?>
<div class="container">
<?php
    if(have_posts()){
        while(have_posts()){ the_post(); ?>
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_title(); ?></h2>
                    <h3><?php echo get_field('company_name'); ?></h3>
                    <p><?php echo get_field('start_date'); ?></p>
                    <p><?php echo get_field('role'); ?></p>
                </div>
            </div>
        <?php
            }
        }
        ?>
        
</div>   
<?php get_footer(); ?>