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

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    
  </div>

  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

</div>
