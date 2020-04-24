<?php get_header(); ?>
<div class="container">
    <div class="row skillBox">
    <?php
        if(have_posts()){
            while(have_posts()){ the_post(); ?>                
                <div class="col-md-3">
                    <h2><?php the_title(); ?></h2>
                </div>
               
                <div class="col-md-6">   
                     <div class="skill">
                         <div class="skill_level" style="width:
                         <?php echo get_field('level');?>%;"></div>
                     </div>
                </div>
                <div class="col-md-3">
                    <h2><?php echo get_field('level'); ?>%</h2>
                </div>
    <?php
        }
    }
    ?>
    </div>   
</div>   
<?php get_footer(); ?>