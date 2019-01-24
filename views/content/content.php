<?php
/**
 * Initiator - content.php
 *
 * @package     Initiator
 * @copyright   Copyright (C) 2018. Benjamin Lu
 * @license     GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://luthemes.com)
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php Benlumia007\Backdrop\Entry\display( 'entry-post-thumbnail' ); ?>
	<header class="entry-header">
		<?php Benlumia007\Backdrop\Entry\display( 'entry-title' ); ?>
	</header>
	<div class="entry-metadata">
		<?php Benlumia007\Backdrop\Entry\display( 'entry-timestamp' ); ?>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<div class="entry-taxonomies">
		<?php Benlumia007\Backdrop\Entry\display( 'entry-taxonomies' ); ?>
	</div>
</article>
