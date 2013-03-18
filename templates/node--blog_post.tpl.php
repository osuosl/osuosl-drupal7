<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix content-padding""<?php print $attributes; ?>>

      <h2 class="headline"><a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
      </a></h2>

  <?php if ($display_submitted): ?>
    <div class="submitted">
    	<div class="byline">
    	<?php print $submitted = t('Posted by !username on !datetime', array('!username' => $name, '!datetime' => $date));?>
    	<php print ($terms); ?>
    	</div>
    </div>
  <?php endif; ?>
  
  
   <?php print render($content['field_article_image']); ?>
  
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_article_image']);
      print render($content);
    ?>
    

</div>
