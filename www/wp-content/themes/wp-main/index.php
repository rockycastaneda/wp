<?php get_header(); ?>

    <div class="container-fluid mt-2">
    <div class="row mt-2">
        <div class="col-12">
            <div class="alert alert-info" role="alert">
                index.php index.php
            </div>
        </div>
    </div>

    <?php
        while (have_posts()) {
            the_post(); ?>
            <div class="alert alert-info" role="alert">
                <a href="<?=the_permalink()?>">
                    <h5><?=the_title()?></h5> 
                </a>
                <h6><?=the_excerpt()?></h6>
            </div>            
    <?php            
        }
    ?>

    <?php

        $args = array (
            'post_type' => 'project',  // posts or projects or etc
            'posts_per_page' => '' // or number of posts
        );

        $blogposts = new WP_Query($args);

        while ($blogposts->have_posts()) {
            $blogposts->the_post(); ?>
            <div class="alert alert-warning" role="alert">
                <a href="<?=the_permalink()?>">
                    <h5><?=the_title()?></h5> 
                </a>
                <h6><?=the_excerpt()?></h6>
            </div>            
    <?php        
    wp_reset_postdata();    
        }
    ?>    

    
    <?php for ($i=0;$i<3;$i++) { ?>
    <div class="card mt-1" style="background-color:#7DA3AE">
        <div class="card-header">
            Body Section <?=$i?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php } ?>
    </div>


<?php get_footer(); ?>