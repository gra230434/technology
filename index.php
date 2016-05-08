<?php get_header(); ?>

<a href="#" title="回到首頁"><div class="fixed"></div></a>

<div class="main">
<div class="full-screen">
<?php get_sidebar(); ?>
   <div class="content">
      <div class="page">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="article">
              		
		<div class="article-title">
                        <div class="article-icon"></div>
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                </div>
		<div class="article-page">
			<?php the_content('繼續閱讀') ;?>
		</div>

	        <div class="meta">
		<div class="meta1">
                  <span><img src="<?php echo get_template_directory_uri(); ?>/image/icon_pen.png"><?php the_author() ;?></span>
                  <span><img src="<?php echo get_template_directory_uri(); ?>/image/icon_date.png"><?php the_time('m ,d  Y') ;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/image/ico_comments.png"><?php comments_popup_link('0 comments', '1 comment', ' % comments'); ?></span>
		</div>
		<div class="meta2">
		<span><img src="<?php echo get_template_directory_uri(); ?>/image/icon_folder.png"><?php the_category(', ') ;?></span>
		</div>
		<div class="meta3">
		<span class="tags"><img src="<?php echo get_template_directory_uri(); ?>/image/icon_tags.png"><?php the_tags('', ' ', '');?></span>
		</div>
               </div>
            </div>
         <?php endwhile;?><?php else: ?>
         <?php endif; ?>
      <?php wp_pagenavi(); ?>
      </div>
   </div>
</div>
</div>
<?php get_footer(); ?>
