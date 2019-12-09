<?php /*  Template Name: Project List */ ?>
<?php
    get_header();
    sub_header();
?>
    <div id="content">
        <?php render_portfolio() ?>
        
        <!-- section begin -->
        <section class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
            <a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) )?>" class="btn btn-line-black btn-big">Talk With Us</a>
        </section>
        <!-- logo carousel section close -->
    </div>
<?php
    get_footer();
?>