<?php
/* Template Name: Home Page */
get_header(); ?>

	<main role="main">
            
    <div id="maximage">
        
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.jpg" alt="slider1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-2.jpg" alt="slider2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-3.jpg" alt="slider3">
        
    
    </div>
            
            
            
            <div class="clearfix"></div>
            
		<!-- section -->
                <section class="homeSectionWrapper">
                    
                    <div class="homeSection">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="Banner" class="banner">
                        <div class="clearfix"></div>
                        

                        <div class="mapArea">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d444636.5327829796!2d-94.92797892547321!3d29.466100482008557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x863f0c288bcf5267%3A0x9dde54dc9b966f20!2sCrystal+Beach+Villa!5e0!3m2!1sen!2sus!4v1471281372158" 
                                    width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
			
                    </div>    
            
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
