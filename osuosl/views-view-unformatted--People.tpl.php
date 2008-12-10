<!-- views-view-unformatted-People.tpl.php -->
<?php
// $Id: Based on views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($rows as $id => $row): ?>
    <div id="row-<?php print $id; ?>"><?php print $row; ?></div>
<?php endforeach; ?><!-- end views-view-unformatted-People.tpl.php -->

