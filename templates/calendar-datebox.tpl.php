<?php
/**
 * @file
 * Template to display the date box in a calendar.
 *
 * - $view: The view.
 * - $granularity: The type of calendar this box is in -- year, month, day, or week.
 * - $mini: Whether or not this is a mini calendar.
 * - $class: The class for this box -- mini-on, mini-off, or day.
 * - $day:  The day of the month.
 * - $date: The current date, in the form YYYY-MM-DD.
 * - $link: A formatted link to the calendar day view for this day.
 * - $url:  The url to the calendar day view for this day.
 * - $selected: Whether or not this day has any items.
 * - $items: An array of items for this day.
 */

// Node add needs a reversed date format, Quick and dirty:
?>
<div class="<?php print $granularity ?> <?php print $class; ?>">
<div class="add-event">
 <a href="/node/add/personeel-calendar-item/?edit[field_cal_item_date][und][0][value][date]=<?php print $date; ?>&edit[field_cal_item_date][und][0][value2][date]=<?php print $date; ?>">+</a>
</div>

<?php print !empty($selected) ? $link : $day; ?>
</div>
