<?php get_header();?>
        <div id="contents">
        <?php if(have_posts()):?>
					<div id="top_bar"><h2>Search item for "<?php echo wp_specialchars(stripslashes($_GET['s']), true); ?>"</h2></div>
			<?php while(have_posts()):the_post();?>
        	<div class="title" id="post-<?php the_ID();?>">
                <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
                <p>&#9829; <?php the_time('F jS, Y') ?> , <?php the_tags('Tags : ', ', ', ''); ?> , <?php comments_popup_link('No Comment', '1 Comment', '% Comments'); ?></p>
            </div>
        	<div class="post">
				<?php the_excerpt();?>
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
