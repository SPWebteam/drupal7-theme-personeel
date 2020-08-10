<?php

/**
 * @file
 * SPruit implementation for displaying a single search result.
 */
?>
<article class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <h3 class="title"<?php print $title_attributes; ?>>
    <a href="<?php print $url; ?>"><?php print $title; ?></a>
  </h3>
  <div class="search-snippet-info">
    <?php if ($snippet): ?>
      <p class="search-snippet"<?php print $content_attributes; ?>><?php print $snippet; ?></p>
    <?php endif; ?>
  </div>
</article>
