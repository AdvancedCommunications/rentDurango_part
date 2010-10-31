<?php
// $Id: maintenance-page.tpl.php,v 1.1 2009/10/31 22:51:31 geerlingguy Exp $
?>
<?php
// Enter the message you would like displayed here:
$head_title = 'Site-offline | Drupal';

// If you would like your own logo to be displayed, uncomment and set it here:
// $logo = 'sites/all/files/customLogo.png';

// If your  theme is set to display the site name, uncomment this line and replace the value:
// $site_name = 'Your Site Name';

// If your  theme is set to *not* display the site name, uncomment this line:
// unset($site_name);

// If your theme is set to display the site slogan, uncomment this line and replace the value:
// $site_slogan = 'My Site Slogan';

// If your theme is set to *not* display the site slogan, uncomment this line:
// unset($site_slogan);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $body_classes; ?>">
  <div id="body-wrapper">
    <div id="page"><div id="page-inner">

      <div id="header"><div id="header-inner" class="clearfix">

        <?php if ($logo || $site_name || $site_slogan): ?>
          <div id="logo-title">

            <?php if ($logo): ?>
              <div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
            <?php endif; ?>

            <?php if ($site_name): ?>
              <?php if ($title): ?>
                <div id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                  <?php print $site_name; ?>
                  </a>
                </div>
              <?php else: /* Use h1 when the content title is empty */ ?>
                <h1 id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                  <?php print $site_name; ?>
                  </a>
                </h1>
              <?php endif; ?>
            <?php endif; ?>

          </div> <!-- /#logo-title -->
        <?php endif; ?>


      </div></div> <!-- /#header-inner, /#header -->

      <div id="main"><div id="main-inner" class="clearfix<?php if ($primary_links || $secondary_links || $navbar) { print ' with-navbar'; } ?>">

        <div id="content"><div id="content-inner">

          <?php if ($title || $messages): ?>
            <div id="content-header">
              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>
              <?php print $messages; ?>
            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <div id="maintenance-page">Oops, we broke it.</div>
            <?php print $content; ?>
          </div>

        </div></div> <!-- /#content-inner, /#content -->

      </div></div> <!-- /#main-inner, /#main -->

      <?php if ($footer || $footer_message): ?>
        <div id="footer"><div id="footer-inner" class="region region-footer">

          <?php if ($footer_message): ?>
            <div id="footer-message"><?php print $footer_message; ?></div>
          <?php endif; ?>

          <?php print $footer; ?>

        </div></div> <!-- /#footer-inner, /#footer -->
      <?php endif; ?>

    </div></div> <!-- /#page-inner, /#page -->
  </div> <!-- /#body-wrapper -->

  <?php if ($closure_region): ?>
    <div id="closure-blocks" class="region region-closure"><?php print $closure_region; ?></div>
  <?php endif; ?>

  <?php print $closure; ?>

</body>
</html>
