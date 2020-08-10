<?php
/**
 * @file
 * Default theme implementation to display a node.
 * $submitted is replaced by $formated_date
 */

// CUSTOM $submitted format
$submitted_custom = format_date($node->created, 'custom', 'j M Y');


?>
<article class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if ($display_submitted): ?>
    <section class="meta meta-submitted">
      <?php print $submitted_custom; render($content['field_group']);?>
    </section>
  <?php endif; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  </header>
  <section class="article-content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </section>
  <?php print render($content['links']); ?>
</article>
