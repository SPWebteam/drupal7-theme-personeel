<?php
/**
 * @file
 * Template to display a view as a calendar month.
 */
?>

<div class="calendar-calendar">
  <div class="month-view">
  <table class="full">
    <thead>
      <tr>
        <?php foreach ($day_names as $id => $cell): ?>
          <th class="<?php print $cell['class']; ?>" id="<?php print $cell['header_id'] ?>">
            <?php print $cell['data']; ?>
          </th>
        <?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ((array) $rows as $row) {
        print $row['data'];
      } ?>
    </tbody>
  </table>
  </div>
</div>
