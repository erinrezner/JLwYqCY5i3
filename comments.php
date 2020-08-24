<?php
 if ( post_password_required() ) {
  return;
 }
?>

<?php if ( have_comments() ) : ?>
  <section class="postcomments">
    <ol>
      <?php wp_list_comments(
        array(
          'style'       => 'ol',
          'short_ping'  => true,
          'avatar_size' => 56,
        )
      ); ?>
    </ol>
  </section>
<?php endif; // have_comments() ?>

<?php // If comments are closed and there are comments, let's leave a little note, shall we?
 if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
  <section class="postcomments">
    <p>Comments are closed</p>
  </section>
<?php endif; ?>

<section class="postcomments">
  <?php comment_form(); ?>
</section>