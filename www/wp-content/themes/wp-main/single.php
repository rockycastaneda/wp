<?php get_header(); ?>

    <div class="container-fluid mt-2">
    <div class="row mt-2">
        <div class="col-12">
            <div class="alert alert-info" role="alert">
                <?php 
                    while (have_posts()) {
                        the_post(); ?>
                    
                    <h2><?=the_title()?></h2>

                    <h4>Posted by:<?=the_author()?></h4>

                    <?php $img_url = get_the_post_thumbnail_url(get_the_ID()); ?>

                    <?php if ($img_url) { ?>
                    <img src="<?=get_the_post_thumbnail_url(get_the_ID())?>" alt="post-id"/>
                    <?php } ?>

                <?php the_content(); comment_form(); 
                }
                ?>

            </div>
        </div>
    </div>
    
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