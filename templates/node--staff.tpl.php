<div id="node-<?php print $node->nid; ?>" class="staff-profile <?php print $classes; ?> clearfix content-padding""<?php print $attributes; ?>>
      	
		<div class="staff-picture">
		<?php print render($content['field_picture']); ?>
		</div>
		
	<h2><?php print $title; ?></h2>
	<h4 class="subtitle"><?php print render($content['field_job_title']); ?> | <?php print render($content['field_joke_job_title']); ?></h4>
    <?php
    	hide($content['field_picture']);
      	hide($content['field_job_title']); 
      	
      	print render($content); ?>
</div>