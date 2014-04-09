<?php
/**
 * The page template file
 *
 */

get_header(); ?>
        <main class="main" id="main">             
            <section class="column main">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article class="post">
                    <h2><?php the_title(); ?></h2>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>  
                </article>
                <?php endwhile; endif; ?>
            </section>

            <section class="column sidebar">
                
            </section>
        </main>
<?php get_footer(); ?>