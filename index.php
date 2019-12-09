<?php
    get_header();
    while(have_posts()){ 
        the_post();
    sub_header();
?>
    <div id="content" class="no-top no-bottom">
        <section id="section-about-us-2" class="side-bg no-padding">
            <?php side_image(); ?>

            <div class="container">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-md-6 col-md-offset-6 wow fadeInRight" data-wow-delay=".5s">
                            <h2><?php the_title(); ?></h2>
                        <?php
                                the_content();
                        ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php render_team() ?>
        <?php render_testimonials() ?>

        <section class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
            <a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) )?>" class="btn btn-line-black btn-big">Talk With Us</a>
        </section>

        </div>
    </div>
<?php
    }
    get_footer();
?>