<h2><?php print $title; ?></h2>
    <?php
    	hide($content['field_picture']);
      	hide($content['field_job_title']); 
      	
      	print render($content); ?>
		
