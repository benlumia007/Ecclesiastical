<?php
/**
 * Initiator (index.php)
 *
 * The (index.php) template file is very flexible, it can be used to include all the references for the header, content,
 * aside, footer, and other pages created in WordPress. The (index.php) can also be divided into modular template files,
 * each taking on part of the workload. If you wish to not provide any other template files, the WordPress hierarchy may
 * have default template files or functions to perform their jobs.
 *
 * @package     Initiator Starter Theme
 * @copyright   Copyright (C) 2018. Benjamin Lu
 * @license     GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://getbenonit.com)
 */

?>
<?php get_header(); ?>
	<section id="main" class="site-main">
		<div class="content-area">
			<?php Benlumia007\Backdrop\MainQuery\display( 'content-jetpack-portfolio-archive' ); ?>
		</div>
	</section>
<?php get_footer(); ?>
