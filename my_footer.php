<?php // add your own content here ?>
    <div style="clear:both;"></div>

<?php dynamic_sidebar(1) ?>
<div class="widget">
<ul>
    <li><a href="http://www.cafepress.com/cfadaptation">Store</a></li>
    <li><a href="/contact_us">Contact</a></li>
    <li><a href="/">Home</a></li>
<li><a href="<?php bloginfo('rss2_url'); ?>"><img alt="<?php _e('rss',TEMPLATE_DOMAIN); ?>" src="<?php bloginfo('stylesheet_directory'); ?>/images/rss_blog.gif"/></a></li>
<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><img alt="<?php _e('Comments rss',TEMPLATE_DOMAIN); ?>" src="<?php bloginfo('stylesheet_directory'); ?>/images/rss_comments.gif"/></a></li>
<li><a href="http://validator.w3.org/check?uri=referer"><img alt="<?php _e('valid xhtml 1.1',TEMPLATE_DOMAIN); ?>" src="<?php bloginfo('stylesheet_directory'); ?>/images/valid_xhtml11_80x15_2.png"/></a></li>
			    <h2><?php _e('Search',TEMPLATE_DOMAIN); ?></h2>
			    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
			


</ul>
</div>
<div style="clear:both;"></div>