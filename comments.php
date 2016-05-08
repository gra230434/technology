<?php if(comments_open()) : ?>

<?php if($comments) : ?>
	<h3>大家是怎麼想的呢:</h3>
	<ol>
  	<?php foreach($comments as $comment) : ?>
		<li>
			<?php if($comment->comment_approved == '0') : ?>
				<p>你的留言還未經過管理員審核</p>
				<p>如果想盡快通過審核，可以直接寫信通知管理人員</p>
				<p>聯絡信箱: gra230434@gmail.com</p>
			<?php else : ?>
			<h4><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?></h4>
			<?php comment_text(); ?>
			<?php endif; ?>
			<div class="line"></div>
		</li>
	<?php endforeach; ?>
	</ol>
<?php else : ?>
	<h3>目前還沒有留言  留言是我努力的最大動力</h3>
<?php endif; ?>

	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be <a href="<?php echo site_url(''); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
		<form action="<?php echo site_url(''); ?>/wp-comments-post.php" method="post" id="commentform">
			<?php if($user_ID) : ?>
				<p>以<a href="<?php echo site_url(''); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>登入 <a href="<?php echo site_url(''); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
			<?php else : ?>
				<h3>來留下你的想法吧!</h3>
				<p><input type="text" name="author" id="author" placeholder="your name"  value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
				<label for="author"><small>Name <?php if($req) echo "(必填)"; ?></small></label></p>
				<p><input type="email" name="email" id="email" placeholder="your Email address"  value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
				<label for="email"><small>Mail</small></label></p>
				<p><input type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
				<label for="url"><small>個人網站</small></label></p>
			<?php endif; ?>
			<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
			<p><input name="submit" type="submit" id="submit" tabindex="5" value="Post comment" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; ?>
<?php else : ?>
	<p>這篇的留言是被關閉的</p>
<?php endif; ?>
