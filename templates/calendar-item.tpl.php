<?php
/**
 * @file
 * Template to display view fields as a calendar item.
 * @see template_preprocess_calendar_item.
 */
$index = 0;

// Convert field_event_type to css classes
$item_classes = array('entry');
  if($terms = field_get_items('node', $item->entity, 'field_event_type')) {
  foreach($terms as $term) {
    $loaded = taxonomy_term_load($term['tid']);
    if(!empty($loaded)) {
      $item_classes[] = drupal_html_class($loaded->name);
    }
  }
  }

// Add continuation classes for multi-week items
if ($index++ == 0 && (isset($item->continuation) && $item->continuation)) {
  $item_classes[] = "continued";
}

if (isset($item->continues) && $item->continues) {
  $item_classes[]= "continues";
}

$item_classes = implode(' ', $item_classes);
?>

<div class="<?php print $item_classes; ?>">
      <?php foreach ($rendered_fields as $field): ?>
        <?php print $field; ?>
      <?php endforeach; ?>
</div>
