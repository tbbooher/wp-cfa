<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<fieldset>
<input size="10" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input class="btn" type="submit" id="searchsubmit" value="<?php _e('Search',TEMPLATE_DOMAIN); ?>" />
</fieldset>
</form>