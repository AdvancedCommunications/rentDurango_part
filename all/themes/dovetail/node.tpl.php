<?php
// $Id: node.tpl.php,v 1.1 2009/06/15 10:59:41 stevejb Exp $
?>
<span class="node-top"></span>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

  <?php print $picture ?>

  <?php if ($page == 0): ?>
  <div class="teaser-title">
    <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </div>
  <?php endif; ?>

  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted; ?></span>
  <?php endif; ?>

  <div class="content">
    <?php print $content ?>
  </div>

  <div class="meta">

    <?php if ($links): ?>
      <div class="links">
        <?php print $links; ?>
      </div>
    <?php endif; ?>

    <?php if ($taxonomy): ?>
      <div class="terms">
        <span>Tags:</span><?php print $terms ?>
      </div>
    <?php endif;?>
  
    <span class="clear"></span>

  </div>
<?php if ($page == 0): ?>
  <div class="teaser-footer"></div>
  <?php endif; ?>
</div>
<span class="node-bottom"></span>
