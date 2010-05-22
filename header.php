<?php
define ('TEMPLATE_DOMAIN','wp-cfa');
load_theme_textdomain(TEMPLATE_DOMAIN);
global $freshy_options;
$freshy_options = get_option('freshy_options');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?PHP
header( 'Expires: Sat, 26 Jul 1997 05:00:00 GMT' );
header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Cache-Control: post-check=0, pre-check=0', false );
header( 'Pragma: no-cache' );
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php bloginfo('name'); ?>
<?php wp_title(); ?>
</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="Freshy"/>

<!--[if lte IE 6]>
<link rel="stylesheet" href="<?php print get_bloginfo('stylesheet_directory').'/fix-ie.php'; ?>" type="text/css" media="screen"/>
<![endif]-->
<!--[if IE 7]>
<div align="center" style="font-size:30px; padding-top:20px;padding-bottom:20px;">Crossfit Adaptation</div>
<div align="center" style="font-size:15px; padding-bottom:20px;">Site Currently under construction for internet explorer, please excuse our mess. This should be fixed by 22 May 2010<br />
Elements classes are filling up. Click to <a href="http://www.crossfitadaptation.com/getting-started-2/">get started</div>.
</div>
  <style type="text/css">
  div#header {
     display:none;
  }
  </style>
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
</head>
<body>
<div id="body">
<div id="header"> 
  <div class="container">
    <div id="title">
    <a href="/"><img src="/wp-content/themes/wp-cfa/images/headers/CFA-Logo.png" alt="CrossFit Adaptation" width="500" height="95" id="logo" /></a>
      <div id="menu">
        <div class="menu_container">
          <ul>
            <li><a href="/getting-started/"> <img src="/wp-content/themes/wp-cfa/images/headers/GetStarted.png" alt="Get Started" width="160" height="42"  />
              <div>Take the next steps.</div>
              </a>
             </li>
          </ul>
        </div>
      </div>
      <!-- menu --> 
    </div>
    <!-- title -->
    <div id="topbar">
      <ul>
        <li class="current_page_item"><a href="/" class="home" title="Home">Home</a></li>
		<li><a href="/about_us/" title="About Us">About Us</a></li>
        <li><a href="/Coaches/" title="Team">Team</a></li>
        <li><a href="/location/" title="Location">Location</a></li>
        <li><a href="/schedule/" title="Schedule">Schedule</a></li>
        <li><a href="/Benefits/" title="Benefits">Benefits</a></li>
        <li><a href="javascript:void(0);" class="lastmenu"></a></li>
      </ul>
    </div>
    <!--
		<div id="header_image">

			<div id="menu">
			<div class="menu_container">

			<ul>
			
			<?php if ('page' != get_option('show_on_front')) : // no page has been chosen as frontpage ?>
					
				<li class="<?php if (is_home()) echo 'current_page_item'; ?>">
					<a href="<?php echo get_settings('home'); ?>">
						<?php _e($freshy_options['first_menu_label'],TEMPLATE_DOMAIN); ?>
					</a>
				</li>
					
			<?php endif; ?>

			<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
				
			<?php if ($freshy_options['custom_menus'])
			{
				foreach ($freshy_options['custom_menus'] as $custom_menu)
				{
					?>
					<li>
						<a href="<?php echo $custom_menu['url']; ?>">
							<?php _e($custom_menu['label'],TEMPLATE_DOMAIN); ?>
						</a>
					</li>
					<?php
				}
			}
			?>
				
			<?php if ($freshy_options['last_menu_type']=='email' || $freshy_options['last_menu_type']=='link') : ?>
					
				<li class="last_menu">
					
				<?php if ($freshy_options['last_menu_type']=='email') : ?>
						
				
	<a href="mailto:<?php echo $freshy_options['contact_email']; ?>">
						<?php _e($freshy_options['last_menu_label'],TEMPLATE_DOMAIN); ?>
					</a>
						
				<?php elseif ($freshy_options['last_menu_type']=='link') : ?>
						
					<a href="<?php echo $freshy_options['contact_link']; ?>">
						<?php _e($freshy_options['last_menu_label'],TEMPLATE_DOMAIN); ?>
					</a>
						
				<?php endif; ?>	
					
				</li>
						
			<?php endif; ?>
				
			</ul>
				
			</div><span class="menu_end"></span>
			</div>
			
		</div>
		--> 
    <!-- end image div --> 
  </div>
</div>
<div id="page" <?php echo freshy_layout_class() ?>>
<div class="container">
<div id="frame">
