<?php
// $Id: uicarousel.tpl.php,v 1.2 2010/01/29 19:50:54 neclimdul Exp $
/**
 * @file
 *   Basic template for jQuery UI Carousels.
 */

?>
<div id="<?php print $carousel_id; ?>" class="ui-carousel">
  <a href="#" class="ui-carousel-prev"><?php print $previous; ?></a>
  <ul>
<?php
foreach ($items as $item) {
?>
    <li>
      <?php print $item; ?>
    </li>
<?php
}
?>
  </ul>
  <a href="#" class="ui-carousel-next"><?php print $next; ?></a>
</div>
