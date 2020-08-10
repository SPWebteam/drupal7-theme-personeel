<?php

/**
 * @file
 * Spruit implementation to navigate books.
 *
 * Presented under nodes that are a part of book outlines.
 *
 * Additional variables:
 * - $flat_tree: The immediate children of the current node rendered as an unordered
 *   list.
 */
?>
<?php if ($full_tree || $has_links): ?>
  <div id="book-navigation-<?php print $book_id; ?>" class="book-navigation">
    <?php print $full_tree; ?>
  </div>
<?php endif; ?>
