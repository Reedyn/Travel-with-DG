<?php if(wp_count_posts('page') > 1): ?>
	<div class="navigation">
	    <div class="previous alignleft"><?php previous_posts_link( 'Föregående' ); ?> </div>
	    <div class="current">sida <?php echo ((get_query_var('paged')) ? get_query_var('paged') : 1); ?> av <?php echo wp_count_posts('page'); ?></div>
	    <div class="next alignright"><?php next_posts_link( 'Nästa' ); ?></div>
	</div>
<?php endif; ?>