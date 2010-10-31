<div class="node<?php print ($sticky) ? " sticky" : ""; ?>">
  <?php if ($page == 0): ?>
    <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php else: ?>
    <?php print $picture ?>
    <em class="info"><?php print $submitted ?></em>
  <?php endif; ?>
  <div class="node-content">
   <?php print $content ?>
  </div>
  <?php if ($links): ?>
    <div class="clear links"><em><?php print $links ?></em></div>
  <?php endif; ?>
  <?php if ($page == 1): ?>
    <div class="clear terms"><?php print $terms ?></div>
  <?php endif; ?>
</div>
