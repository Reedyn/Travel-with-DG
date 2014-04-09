<?php
/**
 * The post template file
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
                    <div class="byline">
                        <div class="author-image"><?php echo get_avatar(get_the_author_meta('ID')); ?></div>
                        <div class="post-info">
                            <div class="author-name"><?php if($link = get_the_author_link()){ echo $link; } else {the_author();} ?></div>
                            <div class="date"><?php the_date('F j, Y'); ?> in <?php the_category(', '); ?></div>
                        </div>
                    </div>  
                </article>
                <?php endwhile; endif; ?>
            </section>

            <section class="column sidebar">
                
            </section>
        </main>
<?php get_footer(); ?>