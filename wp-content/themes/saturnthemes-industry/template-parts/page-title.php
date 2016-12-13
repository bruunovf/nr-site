<?php
$saturnthemes_industry_show_page_title = true;
$saturnthemes_industry_breadcrumb_img  = Kirki::get_option( 'saturnthemes', 'breadcrumb_background_image' );

if ( is_front_page() && is_home() ) {

} elseif ( is_front_page() ) {

	if ( get_post_meta( get_option( 'page_on_front' ), 'saturnthemes_industry_page_title_show', true ) == 'no' ) {
		$saturnthemes_industry_show_page_title = false;
	}

	if ( $saturnthemes_meta_background = get_post_meta( get_option( 'page_on_front' ), 'saturnthemes_industry_page_title_background', true ) ) {
		$saturnthemes_industry_breadcrumb_img  = $saturnthemes_meta_background;
	}

} elseif ( is_home() ) {

	if ( get_post_meta( get_option( 'page_for_posts' ), 'saturnthemes_industry_page_title_show', true ) == 'no' ) {
		$saturnthemes_industry_show_page_title = false;
	}

	if ( $saturnthemes_meta_background = get_post_meta( get_option( 'page_for_posts' ), 'saturnthemes_industry_page_title_background', true ) ) {
		$saturnthemes_industry_breadcrumb_img  = $saturnthemes_meta_background;
	}

} else if ( is_page() || is_singular( 'services' ) ) {

	if ( get_post_meta( get_the_ID(), 'saturnthemes_industry_page_title_show', true ) == 'no' ) {
		$saturnthemes_industry_show_page_title = false;
	}

	if ( $saturnthemes_meta_background = get_post_meta( get_the_ID(), 'saturnthemes_industry_page_title_background', true ) ) {
		$saturnthemes_industry_breadcrumb_img  = $saturnthemes_meta_background;
	}

}
?>
<?php if ( $saturnthemes_industry_show_page_title ) : ?>
	<div class="page-title">
		<div class="page-title-hero" style="background-image: url('<?php echo esc_url( $saturnthemes_industry_breadcrumb_img ); ?>')"></div>
		<div class="container">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="header-title"><?php esc_html_e( 'Blog', 'saturnthemes-industry' ) ?></h1>
			<?php elseif ( is_front_page() ) : ?>
				<h1 class="header-title"><?php echo get_the_title( get_option('page_on_front') ); ?></h1>
			<?php elseif ( is_home() ) : ?>
				<h1 class="header-title"><?php echo get_the_title( get_option('page_for_posts') ); ?></h1>
			<?php elseif ( function_exists( 'is_shop' ) && is_shop() ) : ?>
				<h1 class="header-title"><?php woocommerce_page_title(); ?></h1>
			<?php elseif ( is_archive() ) : ?>
				<?php the_archive_title( '<h1 class="header-title">', '</h1>' ); ?>
			<?php elseif ( is_page() ) : ?>
				<?php the_title( '<h1 class="header-title">', '</h1>' ); ?>
			<?php elseif ( is_single() ) : ?>
				<h2 class="header-title"><?php esc_html_e( 'Blog', 'saturnthemes-industry' ) ?></h2>
			<?php elseif ( is_search() ) : ?>
				<h1 class="header-title"><?php printf( esc_html__( 'Search Results for: %s', 'saturnthemes-industry' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<?php else : ?>
				<?php the_title( '<h1 class="header-title" itemprop="headline">', '</h1>' ); ?>
			<?php endif; ?>
		</div>
		<div class="breadcrumbs-wrapper">
			<div class="container">
				<div class="row row-xs-center">
					<div class="col-md-7">
						<?php echo saturnthemes_industry_bread_crumb( array( 'home_label' => Kirki::get_option( 'saturnthemes', 'breadcrumb_home_text' ) ) ); ?>
					</div>
					<div class="col-md-1 col-no-padding hidden-sm-down">
						<div class="saturnthemes-toggle">
							<span class="share-button saturnthemes-toggle-btn"><i class="fa fa-share-alt"></i><b>Share</b></button></span>
							<div class="saturnthemes-toggle-dropdown share-wrapper">
								<ul>
									<li><a target="_blank" href="https://facebook.com/sharer.php?u=<?php echo get_permalink(); ?>"><i class="fa fa-facebook"></i>Facebook</a></li>
									<li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>"><i class="fa fa-twitter"></i>Twitter</a></li>
									<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&map;url=<?php echo get_permalink(); ?>&amp;title=<?php echo urlencode(get_the_title()); ?>"><i class="fa fa-linkedin-square"></i>LinkedIn</a></li>
									<li><a target="_blank" href="https://plus.google.com/share?url=<?php echo get_permalink(); ?>"><i class="fa fa-google-plus"></i>Google+</a></li>
									<li><a target="_blank" href="mailto:?body=<?php echo get_permalink(); ?>"><i class="fa fa-envelope-o"></i>Email</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm-down">
						<?php echo html_entity_decode( Kirki::get_option( 'saturnthemes', 'page_title_call_to_action' ) ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>