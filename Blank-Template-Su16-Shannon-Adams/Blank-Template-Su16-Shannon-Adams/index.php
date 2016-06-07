<?php get_header(); ?>
        
    <!--Begin Body-->
        <section class="row">
            <div class="twelve columns">
                <!-- Beging Loop-->
                
                <?php
                    if ( have_posts() ) {
                       while ( have_posts() ) {
                            the_post(); ?>
                                    <?php 
                                        if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail');
                                        }
                                    ?>
                <h3><a href="<?php the_permalink(); ?>"<?php the_title(); ?> </a></h3>
                            <?php the_excerpt(); ?>
                <a href="<?php get_permalink(); ?>">Read More</a>
                        
                    <?php  
                       } 
                    }

                ?>
                
                <!-- End Loop-->
            
                
                
            </div>
        </section>
    <!--End Body-->

<?php get_footer(); ?>
        
