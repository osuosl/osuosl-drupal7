<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix content-padding""<?php print $attributes; ?>>
      <?php print render($content['field_logo']); ?>
      <div class="byline"><?php print $title; ?> | <?php print render($content['field_level']); ?></div>
   
   <p class="lead"><?php print render($content['field_large_summary']); ?></p>
  
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_level']);
      hide($content['field_large_summary']);
      hide($content['field_article_image']);
      print render($content);
    ?>
    

</div>
