<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

 <head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $head ?>
  <?php print $styles ?>
  <!--[if IE 6]>
    <link rel="stylesheet" type="text/css"
      href="<?php print base_path(). path_to_theme(); ?>/iestyles/ie6.css" />
  <![endif]-->
  <!--[if IE 7]>
    <link rel="stylesheet" type="text/css"
      href="<?php print base_path(). path_to_theme(); ?>/iestyles/ie7.css" />
  <![endif]-->
  <?php print $scripts ?>
  <script type="text/javascript" src="/misc/imgbubbles.js"></script>
  <script type="text/javascript" src="/misc/imgbubfact.js"></script>
 </head>

 <body>
  <div id="page">
    <div id="header">
      <img id="for_rent_sign" src="/images/for_rent_sign.jpg" />
      <img id="RD_Logo_Blue"  src="/misc/RD_Logo_Blue.gif" />
      <span id="iconlinks" >
        <ul id="orbs" class="bubblewrap">
          <li><a href="contact">
            <img src="/misc/contact.png" alt="Contact Us"/></a></li>
          <li><a href="user">
            <img src="/misc/login.png" alt="Login" /></a></li>
          <li><a href="faq">
            <img src="/misc/QM_Bubble.png" alt="Frequently Asked Questions" />
              </a></li>
      </span>
    </div>

    <div class="wrapper">
      <div id="primary" class="<?php print marinelli_width($left,$right) ?>"> 
        <div class="singlepage">
          <?php if ($help) { print '<div class="help"><'. $help .'></div>'; } ?>
          <?php if ($messages) {print '<div class="messages">'
                  . $messages . '</div>'; } ?>
          <?php print $content; ?>
        </div>
      </div>
      <?php if ($left and $is_front) {
         print '<div class="lsidebar">' . $left . '</div>';} ?>
      <div class="clear"></div>
    </div>
  </div>
  <?php print '<div id="footer">' . $footer . $footer_message . '</div>'; ?>
  <?php print $closure; ?>
 </body>
</html>