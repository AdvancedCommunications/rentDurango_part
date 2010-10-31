
<!-- start comment -->
<div class="comment <?php print $comment_classes ?>">
<?php if (!empty($new)): ?>
<a id="new"></a>
<span class="new"><?php print $new ?></span>
<?php endif; ?>
<h3 class="title"><?php print $title ?></h3>
<?php if ($unpublished): ?>
<div class="unpublished"><?php print t('Unpublished') ?></div>
<?php endif; ?>
<?php print $picture ?>
<div class="submitted"><?php print $submitted ?></div>
<div class="content clear-block"><?php print $content ?></div>
<?php if ($signature): ?>
<div class="user-signature clear-block"><?php print $signature ?></div>
<?php endif; ?>
<?php if ($links): ?>
<div class="links">&raquo; <?php print $links ?></div>
<?php endif; ?>
</div>
