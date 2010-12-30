<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
<div class="comments_area">
		<div class="comment_closed">
			<p class="comment_closed_note">This post is password protected. Enter the password to view comments.</p>
			</div>
</div>
			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>
<!-- You can start editing here. -->
<?php if ($comments) : ?>
<?php endif; ?>
<div class="comments_area">
<h2>Comments Area</h2>
<?php if ('open' == $post->comment_status) : ?>
<div class="comment_lists"><h3><?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for <strong>comments</strong> on this post')); ?></h3>
<ol>
<?php foreach ($comments as $comment) : ?>
<div class="avatars"><?php echo get_avatar( $comment, 45 ); ?></div>
<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
<h3><?php comment_author_link() ?></h3>
<p class="c_tm"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('<strong> &gt;&gt; edit</strong>'); ?></p>
<?php if ($comment->comment_approved == '0') : ?>
<blockquote>Your comment is awaiting moderation.</blockquote>
<?php endif; ?>
<?php comment_text() ?>
</li>
<?php
/* Changes every other comment to a different class */
$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
?>
<?php endforeach; /* end for each comment */ ?>
</ol>
</div>
<div class="comment_form">
<h2><?php comments_number('No Response', 'One Response', '% Responses' );?></h2>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<div id="c_rss"><?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for <strong>comments</strong> on this post')); ?></div>
<?php else : ?>
<p><form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( $user_ID ) : ?>

							<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

		<?php else : ?>

							<label for="author">Name <?php if ($req) _e('(required)'); ?></label><br/>
							<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /><br/>
							<label for="email">Mail (will not be published) <?php if ($req) _e('(required)'); ?></label><br/>
							<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /><br/>		
							<label for="url">Website</label><br/>
							<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /><br/>
		<?php endif; ?>
							<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea><br/>
							<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
							<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		<?php do_action('comment_form', $post->ID); ?>
							</form></p>
</div>
<?php endif; // If registration required and not logged in ?>
</div>
<?php else : // this is displayed if there are no comments so far ?>
<?php if ('open' == $post->comment_status) : ?>
<?php else : // comments are closed ?>
<div class="comment_closed">
		<p class="comment_closed_note">Sorry! This article is unable to leave response!</p>
</div>
<?php endif; ?>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>