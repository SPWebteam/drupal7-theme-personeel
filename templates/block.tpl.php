<?php

/**
 * @file
 * Default theme implementation to display a block.
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if ($block->subject): ?>
  	  <?php print render($title_prefix); ?>
  	  <header>
    <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
      </header>
     <?php print render($title_suffix); ?>  
  <?php endif;?>
  
  <div class="content">
    <?php print $content ?>
  </div>
</div>