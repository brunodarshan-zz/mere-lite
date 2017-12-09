
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<article>
  <header>
   <h2>
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
   </h2>
  </header>
<div>
  <?php the_content(); ?>
</div>
</article>
<?php endwhile; ?>
<?php endif; ?>


