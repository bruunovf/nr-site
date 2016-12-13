<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-grid-item' ); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-img">
			<?php the_post_thumbnail( 'image-370-190' ); ?>
			<a href="<?php echo get_permalink() ?>" class="button primary-button"><i class="fa fa-share"></i><?php esc_html_e( 'Leia Mais', 'saturnthemes-industry' ); ?></a>
		</div>
	<?php } ?>
	<h2 class="entry-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php saturnthemes_industry_posted_on(); ?>
</article>