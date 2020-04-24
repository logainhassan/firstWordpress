<?php get_header(); ?>
<div class="container">
<div class="row">
    <?php
        $args = array(
            "post_type" => "skills",
            "posts_per_page" => 12
        );
        $query = new WP_Query( $args );
        if($query->have_posts()){
            while( $query->have_posts()){ $query->the_post(); ?>
                
                    <div class="col-md-6">
                        <a href="<?php echo get_the_permalink();?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </div>
                  
            <?php
                }
            }
            ?>
       </div>
    
    </div>   
<?php get_footer(); ?>  