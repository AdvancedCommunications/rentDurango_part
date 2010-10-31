<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">

  <head>
    <title><?php print $head_title ?></title>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
  </head>

<body>
  <div id="container">

    <div id="header">
      <?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a><?php } ?></h1> 
      <?php if ($site_slogan) { ?><?php print $site_slogan ?><?php } ?>	 
      <p id="subtext"></p>	 

    </div>

    <div id="right">
      <?php print $right ?>
      <?php if ($left != ""): ?>
        <?php print $left ?> <!-- print left sidebar if any blocks enabled -->
      <?php endif; ?> 
    </div>


    <div id="content">
      <div id="breadcrumb">
       <?php print $breadcrumb ?>
      </div>

      <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
      <?php print $help ?>
      <?php print $messages ?>

      <?php if ($title) { ?><h1 class="title"><?php print $title ?></h1><?php } ?>
      <div class="tabs"><?php print $tabs ?></div>

      <?php print $content; ?>

    </div>
    <div id="footer">
      <?php print $footer_message ?>
    </div>
    <?php print $closure ?>

</div>


</body>
</html>

