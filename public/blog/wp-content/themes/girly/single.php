<?php get_header();?>
        <div id="contents">
        <?php if(have_posts()):?><?php while(have_posts()):the_post();?>
        	<div class="title" id="post-<?php the_ID();?>">
                <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
                <p><?php edit_post_link('&bull; edit &bull; '); ?>&#9829; <?php the_time('F jS, Y') ?> , <?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?><br/>&#9829; Category : <?php the_category(', ') ?> &#9829;  <?php the_tags('Tags : ', ', ', ''); ?></p>
            </div>
        	<div class="post">
				<?php the_content(__('Read the rest of this entry &raquo;&raquo;'));?>
                <p><?php wp_link_pages('<strong>Pages : </strong>', '', 'number');?></p>
            </div>
<?php comments_template();?>
		<?php endwhile;?>
		<?php else:?>
        <p>404 Error!</p>
        <?php endif;?>
        </div>
        <div id="nav">
        	<p><?php previous_post_link('&laquo; %link');?> &#8734; <?php next_post_link('%link &raquo;');?></p>
        </div>
    </div>
<?php get_sidebar();?>