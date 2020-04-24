<?php get_header(); ?>
<div class="container">
<div class="row">
    <?php
        $args = array(
            "post_type" => "work_experiences",
        );
        $query = new WP_Query( $args );
        if($query->have_posts()){
            while( $query->have_posts()){ $query->the_post(); ?>
                
                    <div class="col-md-6">
                        <a href="<?php echo get_the_permalink();?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                    </div>
                    <div class="col-md-6">
                            <h2><?php echo get_field("year"); ?></h2>
                    </div>
                    
            <?php
                }
            }
            ?>
      </div>      
    </div>   
<?php get_footer(); ?>  