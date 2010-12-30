<?php get_header();?>
        <div id="contents">
        <?php if(have_posts()):?><?php while(have_posts()):the_post();?>
        	<div class="title" id="post-<?php the_ID();?>">
                <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p><?php edit_post_link('&bull; edit &bull; '); ?>&#9829; <?php the_time('F jS, Y') ?> , <?php the_tags('Tags : ', ', ', ''); ?> , <?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?></p>
            </div>
        	<div class="post">
				<p><?php the_attachment_link($post->post_ID, true) ?></p>
				<?php the_content();?>
				<p><strong>From the post :</strong> <a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a></p>
            </div>
<?php comments_template();?>
		<?php endwhile;?>
		<?php else:?>
        <p>404 Error!</p>
        <?php endif;?>
        </div>
        <div id="nav">
        	<p><?php previous_post_link('&laquo; %link');?> - <?php next_post_link('%link &raquo;');?></p>
        </div>
    </div>
<?php get_sidebar();?>