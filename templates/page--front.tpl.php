<?php
include("includes/header.php");
?>

<div id="content-container">
	<div class="page-content">
	
	<div class="contentheader">
			<h1 class="small">Welcome to the Oregon State University Open Source Lab. <a href="http://osuosl.org/about">About Us</a></h1>
    		<div class="hr"></div>
    </div>
      <a id="main-content"></a>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      
      <div id="feat-image">
      	<?php print render($page['homepage_message']); ?>
      </div>
      
	</div>

 
<?php
include("includes/footer.php");
?>