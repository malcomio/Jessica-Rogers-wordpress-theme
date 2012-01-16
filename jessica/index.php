<?php
  /*
 Template Name: Homepage
 */
get_header();
?>
    <div class="mainContent">
        <div class="photo">
            <img src="<?php bloginfo('template_directory'); ?>/images/blog.jpg" alt="jessica rogers - home image" width="564" height="263" />
        </div>
        <div class="quote">
            <div class="quotesTop">
                <img src="<?php bloginfo('template_directory'); ?>/images/quotes_top.gif" alt="quotes - jessica rogers" width="56" height="30" />
            </div>
            <div>
            <div class="quoteText">
                <h2>
          <?php
             if (function_exists('stray_random_quote'))
                stray_random_quote('quotes',false,'',false,1,0,'quoteID','ASC', false, '');
          ?>
                </h2>
                </div>
            </div>
            <div class="quoteBottom">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/quotes.gif" alt="quotes - jessica rogers" width="60" height="35" />
            </div>
        </div>


<?php
query_posts("cat=-3");
    if (have_posts()) : the_post(); update_post_caches($posts); ?>
        <div class="text" id="post-<?php the_ID(); ?>">
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            <?php the_content(); ?>
        </div>
        <?php endif; ?>
        

    <div class="testimonial">
        <div class="blogSidebar">
            <?php get_sidebar(); ?>
            
        </div>

    </div>
  <div class="footer">
     <?php get_footer(); ?>
  </div>
</div>


</div>
</div> <!-- page, declared in header -->

</body>
</html>