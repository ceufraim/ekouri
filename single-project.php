<?php
while(have_posts()){ 
    the_post();
    $meta = get_post_meta($post->ID);
    $attachments = new Attachments('project_attachments', $post->ID);
    $fmt = new NumberFormatter( 'el_EL', NumberFormatter::CURRENCY );
    ?>
<div class="container project-view">
    <div class="row">
        <div class="col-md-8 project-images">
            <?php while( $attachments->get() ) : ?>
                <img src="<?php echo $attachments->url() ?>" alt="" class="img-responsive" />
            <?php endwhile; ?>
        </div>
        <div class="col-md-4">
            <div class="project-info">
                <h2><?php the_title()?></h2>

                <div class="details">
                    <?php 
                        $date = date_parse_from_format("Ymd", $meta['date'][0]);
                        print_info_text('date', date('D, d M Y', mktime(null, null, null, $date['month'], $date['day'], $date['year'])));
                        print_info_text('location', $meta['location'][0]);
                        print_info_text('price', $fmt->formatCurrency($meta['price'][0], "EUR"));
                        print_info_text('client', $meta['client'][0]);
                        print_info_text('category', $meta['category'][0]);
                    ?>
                </div>

                <?php the_content() ?>

            </div>
        </div>
    </div>
</div>
<?php } ?>
