<!DOCTYPE html>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

<!-- Open Sans serviced from Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Gudea' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

 <meta name="viewport" content="width=device-width, user-scalable=no">

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
    <script src="https://code.jquery.com/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/js/jquery.flexnav.min.js" type="text/javascript"></script>

  <script type='text/javascript' src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/js/expand.js">
    <script type="text/javascript">
      $(".flexnav").flexNav();
    </script>
</body>
</html>
