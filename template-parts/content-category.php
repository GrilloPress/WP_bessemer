<?php
/**
 * The template used for displaying page content in category.php feed
 *
 * @package sth
 */
?>

  <div class="col-md-6 col-sm-6 col-xs-12">
<article id="post-<?php the_ID(); ?>" <?php post_class('category-article card-category'); ?>>  

      <?php if ( has_post_thumbnail() ) :?>
            <a href="<?php the_permalink() ;?>">
              <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive img-full')); ?>
            </a>
          <?php else :?>
          <a href="<?php the_permalink() ;?>">
            <img class="img-responsive img-full" src="<?php echo get_template_directory_uri() . "/images/news.jpg"; ?>" alt="News">
          </a>
          <?php endif ;?>

    <div class="card-body">
      <header class="entry-header">
          <?php the_title( sprintf( '<h2 class="category-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </header><!-- .entry-header -->

      <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->

        <footer class="entry-footer">
          <div class="entry-meta">
            <?php sth_posted_on(); ?>
          </div><!-- .entry-meta -->
        </footer><!-- .entry-footer -->
    </div>


</article><!-- #post-## -->
      </div>