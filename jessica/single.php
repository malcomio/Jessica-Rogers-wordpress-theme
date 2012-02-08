<?php
get_header();
?>
<div class="mainContent">
  <div class="photo">
    <img src="<?php bloginfo('template_directory'); ?>/images/home.jpg" alt="jessica rogers - home image" width="564" height="263" />
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
            stray_random_quote('quotes', false, '', false, 1, 0, 'quoteID', 'ASC', false, '');
          ?>
        </h2>
      </div>
    </div>
    <div class="quoteBottom">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/quotes.gif" alt="quotes - jessica rogers" width="60" height="35" />
    </div>
  </div>

  <div class="main">

    <div class="mainBody">
      <div class="text" id="post-<?php the_ID(); ?>">
        <div class="navigation">
          <div class="alignleft">
            <p><?php previous_post_link('&laquo; %link', '%title', false, '3') ?></p>
          </div>
          <div class="alignright">
            <p><?php next_post_link('%link &raquo;', '%title', false, '3') ?></p>
          </div>
        </div>
        <div id="container">
          <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
              <div class="post" id="post-<?php the_ID(); ?>">
                <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                <div class="entry">
                  <p class="date">
                    <?php _e('Posted By '); ?>
                    <?php the_author_posts_link(); ?> on <?php the_time(__('F j, Y')); ?>
                    <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                  </p>

                  <?php the_content(); ?>

                  <p class="postmetadata">
                    <?php _e('Category&#58;'); ?>
                    <?php the_category(', ') ?> |
                    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                    <br />
                    <span class="tags">
                      <?php _e('Tags: '); ?>
                      <?php the_tags('', ', ', ''); ?>
                    </span>
                  </p>
                  <div class="comments">
                    <?php comments_template(); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>

            <div class="navigation">
              <?php posts_nav_link(); ?>
            </div>

          <?php else : ?>

            <div class="post">
              <h2><?php _e('Not Found'); ?></h2>
            </div>

          <?php endif; ?>
        </div>
      </div>
    </div>

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
</body>
</html>