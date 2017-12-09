
<?php get_header(); ?>
<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="card">
            <header class="card-block">
                <h2 class="card-title">
                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                </h2>
            </header>
            
            <div class="card-text">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
 <?php endif; ?>
</main>
<?php get_footer(); ?>

