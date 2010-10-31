
<!-- start node -->
<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
<div class="title1"><div class="title2">
<?php if ($page == 0): ?>
<h1 class="title"><a href="<?php print $node_url ?>"><?php print $title ?></a></h1>
<?php else: ?>
<h1 class="title"><?php print $title ?></h1>
<?php endif; ?>
</div></div>
<?php if ($unpublished): ?>
<div class="unpublished"><?php print t('Unpublished') ?></div>
<?php endif; ?>
<div class="meta">
<?php if ($submitted): ?>
<div class="submitted"><?php print $submitted ?></div>
<?php endif; ?>
<?php if ($terms): ?>
<div class="terms">Tags: <?php print $terms ?></div>
<?php endif; ?>
</div>
<?php print $picture ?>
<div class="content clear-block"><?php print $content ?></div>
<?php if ($links): ?>
<div class="links"><?php print $links ?></div>
<?php endif; ?>
</div>
<!-- stop node -->
