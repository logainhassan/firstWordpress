<?php get_header(); ?>
        <div class="text-center">
        <?php
        $args = array(
            "name" => "intro",
            "post_type" => "post",

        );
           
            $query = new WP_Query( $args );
            if($query->have_posts()){
                while( $query->have_posts()){ $query->the_post(); ?>
                   <?php the_content(); ?>
                   
                <?php
                    }
                }
                ?>
        </div>

        <div class="container-fluid">
        <?php
        $args = array(
            "name" => "about-me",
            "post_type" => "post",

        );
        $query = new WP_Query( $args );
        if($query->have_posts()){
            while( $query->have_posts()){ $query->the_post(); ?>
                <div class="row">
                    <div class="col-3 image">
                        <?php    the_post_thumbnail("large");?>
                    </div>
                    <div class="col-6">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                
                    
                   
                </div>
            <?php
                }
            }
            ?>

       
    </div>
<?php get_footer(); ?>