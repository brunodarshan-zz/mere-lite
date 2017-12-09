
    <?php get_header(); ?>
    <main class="postlist">
        <div class="container">
        <?php if (have_posts()): ?>
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col">
                    '  <article class="card">
                        <header class="card-block">
                            <h2 class="card-title">
                                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                            </h2>
                        </header>

                        <div class="card-block">
                            <div class="cart-text">
                            <?php the_content(); ?>
                            </div>
                        </div>
                    </article>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>'
        </div>
    
    </main>
    <?php get_footer(); ?>

