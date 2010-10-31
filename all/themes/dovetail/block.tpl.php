<?php
// $Id: block.tpl.php,v 1.1 2009/06/15 10:59:41 stevejb Exp $
?>
<span class="block-top"></span>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?>">

  <?php if (!empty($block->subject)): ?>
    <h3><?php print $block->subject ?></h3>
  <?php endif;?>

  <div class="content">
    <?php print $block->content ?>
  </div>

</div>
<span class="block-bottom"></span>