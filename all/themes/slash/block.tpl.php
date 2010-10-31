
<!-- start block -->
<div id="block-<?php print "$block->module-$block->delta" ?>" class="block block-<?php print $block->module ?>">
<?php if ($block->subject): ?>
<div class="title1"><div class="title2">
<h2><?php print $block->subject ?></h2>
</div></div>
<?php endif; ?>
<div class="content clear-block"><?php print $block->content ?></div>
</div>
