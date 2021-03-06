<?php
/**
 * Backdrop Core (custom-query.php)
 *
 * @package        Backdrop Core
 * @copyright      Copyright (C) 2018. Benjamin Lu
 * @license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author         Benjamin Lu (https://getbenonit.com)
 * ************************************************************************************************************************
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\CustomQuery;

/**
 * Table of Content
 *
 * 1.0 - Loop (Blog)
 * 2.0 - Loop (Jetpack Portfolio)
 */

/**
 *  1.0 - Loop (Blog)
 *
 * @param string $feature output custom loops.
 */
function display( $feature = '' ) {
	if ( 'custom-blog' === $feature ) {
		$posts_per_page = 2;
		$query          = new \WP_Query(
			array(
				'post_type'           => 'post',
				'ignore_sticky_posts' => 1,
				'posts_per_page'      => $posts_per_page,
			)
		);
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); ?>
				<div class="blog-items">
					<?php the_post_thumbnail( 'backdrop-small-thumbnails' ); ?>
					<header class="recent-header">
						<h2 class="recent-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
						<span class="entry-timestamp"><?php echo wp_kses_post( \Benlumia007\Backdrop\Entry\display( 'entry-timestamp' ) ); ?></span>
					</header>
					<div class="entry-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<?php
			}
			wp_reset_postdata();
		}
	} elseif ( 'custom-jetpack-portfolio' === $feature ) {
		if ( is_front_page() && ! is_home() ) {
			$posts_per_page = get_option( 'jetpack_portfolio_posts_per_page' );
			$query          = new WP_Query(
				array(
					'post_type'      => 'jetpack-portfolio',
					'posts_per_page' => $posts_per_page,
				)
			);
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					if ( has_post_thumbnail() ) {
						?>
							<div class="jetpack-portfolio-items">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php the_post_thumbnail( 'backdrop-portfolio-thumbnails' ); ?>
								</a>
								<div class="wp-caption">
									<div class="wp-caption-text">
										<h3 class="jetpack-portfolio-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail_caption(); ?></a></h3>
										<small><?php echo esc_html( get_post_field( 'post_content' ), get_post_thumbnail_id() ); ?></small>
									</div>
								</div>
							</div>
						<?php
					}
				}
				wp_reset_postdata();
			}
		} else {
			while ( have_posts() ) :
				the_post();
				?>
				<div class="jetpack-portfolio-items">
					<a href="<?php echo esc_url( get_permalink() ); ?>">
						<?php the_post_thumbnail( 'backdrop-portfolio-thumbnails' ); ?>
					</a>
					<div class="wp-caption">
						<div class="wp-caption-text">
							<h3 class="jetpack-portfolio-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
							<small><?php echo esc_html( get_post( get_post_thumbnail_id() ) )->post_content; ?></small>
						</div>
					</div>
				</div>
				<?php
		endwhile;
		}
	}
}
