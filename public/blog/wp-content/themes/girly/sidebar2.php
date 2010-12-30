    <div id="rside">
    	<ul>
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(2)) : ?>
				<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
				<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>
				<?php } ?>
				<li id="archives"><?php _e('<h2>Archives</h2>'); ?>
				     <ul>
				     <?php wp_get_archives('type=monthly'); ?>
				     </ul>
						<?php endif;?>
        </ul>
    </div>