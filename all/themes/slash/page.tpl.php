<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">

<head>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>

<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" media="all" href="<?php print $base_path . $directory .'/fix-ie.css'; ?>" />
<![endif]-->

<?php print $scripts ?>
</head>

<body class="<?php print $body_classes ?>">
<div id="body-wrapper">
<div id="header" class="clear-block">

<?php if ($logo): ?>
<a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img id="logo" src="<?php print($logo) ?>" alt="Logo" /></a>
<?php endif; ?>

<?php print $search_box ?>

<?php if ($site_name): ?>
<h1 id="site-name"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>
<?php endif;?>
<?php if ($site_slogan): ?>
<span id="site-slogan"><?php print $site_slogan ?></span>
<?php endif;?>
</div>

<?php if ($primary_links): ?>
<div id="top-nav" class="clear-block">
<?php print theme('links', $primary_links, array('id' => 'primary')) ?>
</div>
<?php endif; ?>

<?php if ($secondary_links): ?>
<div id="top-nav2" class="clear-block">
<?php print theme('links', $secondary_links, array('id' => 'secondary')) ?>
</div>
<?php endif; ?>

<?php if ($header): ?>
<div id="header-block" class="clear-block"><?php print $header ?></div>
<?php endif; ?>

<table id="content-<?php print $layout ?>"><tbody id="content-main"><tr>
<?php if ($left): ?>
<td id="sidebar-left" class="column sidebar" valign="top">
<?php print $left ?>
</td>
<?php endif; ?>

<td id="main" class="column" valign="top">

<?php if ($mission): ?>
<div id="mission"><?php print $mission ?></div>
<?php endif; ?>

<?php print $breadcrumb ?>

<?php if (($title) && (dirname($_GET['q']) != 'node' || $title == t('Page not found'))): ?>
<h2 class="title"><?php print $title ?></h2>
<?php endif; ?>

<?php if ($tabs): ?>
<div id="tabs-wrapper" class="clear-block"><?php print $tabs ?></div>
<?php endif; ?>
<?php print $help ?>
<?php if ($show_messages && $messages): ?>
<?php print $messages ?>
<?php endif; ?>
<div class="clear-block"><?php print $content ?></div>
<?php print $feed_icons ?>

</td>

<?php if ($right): ?>
<td id="sidebar-right" class="column sidebar" valign="top">
<?php print $right ?>
</td>
<?php endif; ?>

</tr></tbody>
</table>

<!-- footer -->
<div id="footer">
<?php print $footer_message ?>
</div></div>
<?php print $closure ?>
</body>
</html>
