<?php
/*
  Template Name: Contact
 */
get_header();
?>

<div class="mainContent">
  <div class="photo">
    <img src="<?php bloginfo('template_directory'); ?>/images/contact.jpg" alt="jessica rogers - coaching" width="564" height="263" />
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
      <?php if (have_posts()) : the_post();
        update_post_caches($posts); ?>

        <div class="text" id="post-<?php the_ID(); ?>">
          <h1><?php the_title(); ?></h1>
          <div class="content">
            <?php the_content(); ?>
            <div class="fixed"></div>
          </div>

        </div>

      <?php else : ?>
        <div class="errorbox">
          <?php _e('Sorry, no posts matched your criteria.', 'inove'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="testimonial">
      <div>
        <div class="clients">
          <h3>What clients say </h3>
        </div>
        <div class="clientsHeader">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/testimonial_heading.gif" alt="" />
        </div>
        <div class= "testimonialText">
          <p><?php
      if (function_exists('stray_random_quote'))
        stray_random_quote('testimonials', false, '', false, 1, 0, 'quoteID', 'ASC', false, '');
      ?>
          </p>
        </div>
      </div>
      <?php include 'social.php'; ?>
    </div>
  </div>

  <div class="rightSide">
    <div id="sidebar">
      <?php
      if (function_exists(dynamic_sidebar('page_sidebar')))
        dynamic_sidebar('page_sidebar');
      ?>
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