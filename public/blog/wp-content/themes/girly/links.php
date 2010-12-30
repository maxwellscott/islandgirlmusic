<?php
/*
Template Name: Links Page
*/
?><?php get_header();?>
        <div id="contents">
        <?php if(have_posts()):?><?php while(have_posts()):the_post();?>
        	<div class="title" id="post-<?php the_ID();?>">
                <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title('&#8734; ', ' &#8734;'); ?></a></h2>
                <p><?php edit_post_link('&bull; edit &bull; '); ?>&#9829; <?php the_time('F jS, Y') ?> , <?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?></p>
            </div>
        	<div class="post">
				<?php the_content(__('Read the rest of this entry &raquo;&raquo;'));?>
                	<ul class="important_lists">
						<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>') ?>
					</ul>
            </div>
<?php comments_template();?>
		<?php endwhile;?>
		<?php else:?>
        <p>404 Error!</p>
        <?php endif;?>
        </div>
    </div>
<?php get_sidebar();?>