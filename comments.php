<?php if(comments_open()) : ?>

<?php if( have_comments() ) : ?>
	<h3 class="comments-title">大家是怎麼想的呢:</h3>

	<?php the_comments_navigation(); ?>
    <ol class="comment-list">
      <?php  wp_list_comments( array(  'style'       => 'ol',
                                       'short_ping'  => true,
                                       'avatar_size' => 42,  ) ); ?>
    </ol><!-- .comment-list -->
  <?php the_comments_navigation(); ?>

<?php else : ?>
	<h3>目前還沒有留言  留言是我努力的最大動力</h3>
<?php endif; ?>

	<?php
	  $comment_firlds_args = array(
			'author' =>
        '<p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"/>' .
				'<label for="author">Name</label><span class="required">*</span></p>',

      'email' =>
        '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"/>' .
		    '<label for="email">Email</label><span class="required">*</span></p>',

      'url' =>
        '<p class="comment-form-url"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
		    '" size="30" /><label for="url">Website</label></p>',
		);
	  $comment_args = array(
			'title_reply'=>'來留下你的想法吧!',
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
			'fields' => apply_filters( 'comment_form_default_fields', $comment_firlds_args ),
			'comment_field' => '<p><textarea name="comment" id="comment" style="width:100%;height:82px;font-size:16px;"></textarea></p>',
			'comment_notes_after' => '',
		);
		comment_form( $comment_args );
	?>
	
<?php else : ?>
	<p>這篇的留言是被關閉的</p>
<?php endif; ?>
