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
  <div id="page">
    <div id="header" style="margin: 0; padding: 1px;
                            border-bottom: 20px solid #054b81">
      <img src="/images/for_rent_sign.jpg" style="height: 80px"/>
      <img src="/misc/RD_Logo_Blue.gif" style="position: relative; left: 100px"/>
    </div>   
    <div class="wrapper">
      <div id="primary"
          class=<?php print '"'.marinelli_width( $left, $right).'">' ?>
        <div class="singlepage">
          <?php if ($mission) {
            print '<div id="sitemission"><p>'. $mission .'</p></div>'; } ?>
          <?php if ($help) { print '<div class="help"><'. $help .'></div>'; } ?>
          <?php if ($messages) {print '<div class="messages">'
                  . $messages . '</div>'; } ?>
          <?php print $content; ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <?php print '<div id="footer">' . $footer . $footer_message . '</div>'; ?>
  <?php print $closure; ?>
 </body>
</html>