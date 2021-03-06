<?php get_header(); ?>

<div class="container">
  <div class="row page-wrapper">
    <div class="col-12 col-md-8">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article class="article" id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
          <h2 class="header-section"><?php the_title(); ?></h2>
          <div class="page__content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>