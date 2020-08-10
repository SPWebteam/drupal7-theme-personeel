<?php

/**
 * @file field.tpl.php
 * Default template implementation to display the value of a field.
 * Reduced elements
 */
?>

<div class="field <?php print $field_name_css ?>">
	<?php foreach ($items as $delta => $item): ?>
		<div class="field-item"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
	<?php endforeach; ?>
</div>
 