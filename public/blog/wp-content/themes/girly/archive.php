<?php get_header();?>
        <div id="contents">
        <?php if(have_posts()):?>
					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
					  <?php /* If this is a category archive */ if (is_category()) { ?>
						<div id="top_bar"><h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2></div>
					  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<div id="top_bar"><h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2></div>
					  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<div id="top_bar"><h2>Archive for <?php the_time('F jS, Y'); ?></h2></div>
					  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<div id="top_bar"><h2>Archive for <?php the_time('F, Y'); ?></h2></div>
					  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<div id="top_bar"><h2>Archive for <?php the_time('Y'); ?></h2></div>
					  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<div id="top_bar"><h2>Author Archive</h2></div>
					  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<div id="top_bar"><h2>Blog Archives</h2></div>
					  <?php } ?>
					  <?php while(have_posts()):the_post();?>
        	<div class="title" id="post-<?php the_ID();?>">
                <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
                <p><?php edit_post_link('&bull; edit &bull; '); ?>&#9829; <?php the_time('F jS, Y') ?> , <?php the_tags('Tags : ', ', ', ''); ?> , <?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?></p>
            </div>
        	<div class="post">
				<?php the_content(__('Read the rest of this entry &raquo;&raquo;'));?>
            </div>
		<?php endwhile;?>
		<?php else:?>
        <p>404 Error!</p>
        <?php endif;?>
        </div>
        <div id="nav">
        	<p><?php posts_nav_link();?></p>
        </div>
    </div>
<?php get_sidebar();?>
