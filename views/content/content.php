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
		<span class="entry-timestamp"><?php Benlumia007\Backdrop\Entry\display( 'entry-timestamp' ); ?></span>
	</header>
	<div class="entry-excerpt">
		<?php the_excerpt(); ?>
	</div>
</article>
