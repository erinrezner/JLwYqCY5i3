<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

  <div class="innercontainer">

    <main id="mainbody" class="fullpagecontent">

      <section>
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>">
            <h3 class="print printtitle"><?php the_title(); ?></h3>
            <?php the_content(); ?>
          </article>
        <?php endwhile; ?>
      </section>

    </main>

    <div style="clear:both;"></div>

  </div>

<?php endif; ?>

<?php get_footer(); ?>