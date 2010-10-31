<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

 <head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $head ?>
  <?php print $styles ?>
  
  <!--[if IE 6]>
    <link rel="stylesheet" type="text/css" href="<?php print base_path(). path_to_theme(); ?>/iestyles/ie6.css" />
<![endif]-->

  <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php print base_path(). path_to_theme(); ?>/iestyles/ie7.css" />
<![endif]-->
  
  <?php print $scripts ?>
 </head>

 <body>
<!--
  <div id="utilities">
    <?php
      print $search_box;
      if (isset($primary_links)) : 
         print '<div id="plinks">'; 
         if (theme_get_setting('menutype')== '0') { 
            print theme('links', $primary_links,
                  array('class' => 'links primary-links'));}
         else {
	    print phptemplate_get_primary_links(); }
         print '</div>';
      endif;
    ?>
  </div>
-->
  <div id="page">
    <div id="header" style="background: white; margin: 0; padding: 1px;
                            border-bottom: 20px solid #054b81">
<img src="/images/for_rent_sign.jpg" style="height: 80px"/>
      <img src="/misc/RD_Logo_Blue.gif" style="position: relative; left: 100px"/>
        <?php if ($is_front) : ?>
          <span id="iconlinks" 
             style="position: relative; top: 51px; left: 30px">
            <a href="post" style="margin-right: 15px">
              <img src="misc/list_blue.gif" />Post a rental ad</a>
            <a href="look" style="margin-right: 15px">
              <img src="misc/look_blue.gif" />Find a rental</a>
            <a href="user" style="margin-right: 15px">
             <img src="misc/login_blue.gif" />Login</a>
          </span>
          <a target="_blank"
           href="http://www.wunderground.com/US/CO/Durango.html"
           style="position: relative; left:80px; top:15px; border-style: none" >
          <img src="http://banners.wunderground.com/banner/bigtemp_both/language/www/US/CO/Durango.gif" style="height: 80px" /></a>
        <?php endif; ?>
<!-- <?php if ($site_name) : ?>
        <div style="margin: 0; padding: 1px">
          <img src="/misc/TRM_logo.png" />
          <img src="/misc/rentDurango.png" />
        </div>
        <?php if ($is_front) :  ?>
          <h1 class="sitetitle">
            <a href="<?php print $base_path ?>"
              title="<?php print t('Home') ?>">
	         <?php print $site_name ?>
	    </a>
          </h1>	   
        <?php else : ?>
          <p class="sitetitle">
            <a href="<?php print $base_path ?>"
              title="<?php print t('Home') ?>"><?php print $site_name ?></a>
          </p>	
        <?php endif; ?>
      <?php endif; ?>
      <?php if ($site_slogan){?>
        <p class="slogan"><?php print $site_slogan ?></p>
      <?php } ?>
--> 
    </div>

    <?php if (($secondary_links)) : ?>
      <?php print '<div id="submenu">' ?>
        <?php print theme('links', $secondary_links,
                        array('class' => 'links secondary-links')) ?>
      <?php print '</div><div class="stopfloat"></div>' ?>
    <?php endif; ?>
    <div class="wrapper">
      <div id="primary"
          class=<?php print '"'.marinelli_width( $left, $right).'">' ?>
        <div class="singlepage">
          <?php if ($mission) {
            print '<div id="sitemission"><p>'. $mission .'</p></div>'; } ?>
<!--        
          <?php if ($title) { 
	    if (!$is_front) { 
              print '<h1'. ($tabs ? ' class="with-tabs"' : '')
                         .'>'. $title .'</h1>'; }} ?>
-->
          <?php if ($tabs) { print '<div class="tabs">'.$tabs.'</div>'; } ?>

          <?php if ($help) { print '<div class="help"><'. $help .'></div>'; } ?>
          <?php if ($messages) {print '<div class="messages">'
                  . $messages . '</div>'; } ?>
          <?php print $content; ?>
        </div>
      </div>
<!--
      <?php if ($left) {print '<div class="lsidebar">' .$left . '</div>';} ?>
      <?php if ($right){print '<div class="rsidebar">' .$right .'</div>';} ?>
-->      <div class="clear"></div>
    </div>
  </div>
  <?php print '<div id="footer">' . $footer . $footer_message . '</div>'; ?>
  <?php print $closure; ?>
 </body>
</html>