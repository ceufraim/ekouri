     <!-- footer begin -->
     <footer class="light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo-3.png" class="logo-small" alt=""><br>
                    We are team based on Brookylin. Our expertise on Interior Design. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                </div>

                <div class="col-md-4">
                    <div class="widget widget_recent_post">
                        <h3>Latest Projects</h3>
                        <?php render_project_list(); ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <div class="widget widget-address">
                        <address>
                            <span>100 Mainstreet Center, Sydney</span>
                            <span><strong>Phone:</strong>(208) 333 9296</span>
                            <span><strong>Fax:</strong>(208) 333 9298</span>
                            <span><strong>Email:</strong><a href="mailto:contact@archi-interior.com">contact@archi-interior.com</a></span>
                            <span><strong>Web:</strong><a href="#">http://archi-interior.com</a></span>
                        </address>
                    </div>
                </div>
            </div>
        </div>

        <div class="subfooter light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        &copy; Copyright 2019 - Archi Interior Design Template by <span class="id-color">Designesia</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                            <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="back-to-top"></a>
    </footer>
    <!-- footer close -->
    </div>
</div>
     <?php wp_footer(); ?>

    </body>
</html>