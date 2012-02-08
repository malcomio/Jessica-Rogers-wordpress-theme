<?php
/*
  Template Name: News page
 */
get_header();
?>


<div class="mainContent">
  <div class="photo">
    <img src="<?php bloginfo('template_directory'); ?>/images/news.jpg" alt="jessica rogers - home image" width="564" height="263" />
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

          <?php
          if (is_page()) {
            $posts = get_posts("category_name=news&showposts=10");
            if ($posts) {
              foreach ($posts as $post):
                setup_postdata($post);
                ?>
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
              <?php
              endforeach;
            }
          }
          ?>
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
<?php include 'social.php'; ?>
      </div>
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