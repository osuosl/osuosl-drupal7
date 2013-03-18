<div class="community-container" id="<?php print render($content['field_anchor']); ?>">
      	
		<div class="node-picture">
		<?php print render($content['field_logo']); ?>
		</div>
		
	<h2><?php print $title; ?></h2>
	<h4 class="subtitle"><?php print render($content['field_job_title']); ?></h4>
    <?php
    	hide($content['field_anchor']);
      	hide($content['field_logo']); 
      	
      	print render($content); ?>
		
</div>