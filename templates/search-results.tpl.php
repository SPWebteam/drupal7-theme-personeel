<?php

/**
 * @file
 * SPruit implementation for displaying search results.
 */
?>
<div class="content">
  <?php if ($search_results): ?>
    <h2 class="title"><?php print t('Search results');?></h2>
    <div class="overview">
      <?php print $search_results; ?>
  </div>
  <?php print $pager; ?>
  <?php else : ?>
    <h2><?php print t('Your search yielded no results');?></h2>
    <?php print search_help('search#noresults', drupal_help_arg()); ?>
  <?php endif; ?>
</div>
