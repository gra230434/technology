<aside class="left_sidebar">
	<div class="sidebar">
	<h3>本網站作者</h3>
	<ul><?php wp_list_authors(); ?></ul>
	</div>

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('SideBar') ) : else : ?>
	<?php endif; ?>
   <div class="sidebar"> 
      <div class="social">
        <ul>
            <li class="icon"><a href="mailto:gra230434@gmail.com" target="_blank"><div class="mail-icon"></div>E-mail</a></li>
            <li class="icon"><a href="http://twitter.com/super_Kevin_Wei" target="_blank"><div class="twitter-icon"></div>Twitter</a></li>
            <li class="icon"><a href="https://www.facebook.com/kevin.wei.coding"  target="_blank"><div class="facebook-icon"></div>Facebook</a></li>
            <li class="icon"><a href="https://plus.google.com/+%E9%9F%8B%E4%BD%B3%E5%9D%87" target="_blank"><div class="googleplus-icon"></div>GooglePlus</a></li>
            <li class="icon"><a href="https://github.com/gra230434" target="_blank"><div class="github-icon"></div>GitHub</a></li>
        </ul>
      </div>
   </div>
</aside>
