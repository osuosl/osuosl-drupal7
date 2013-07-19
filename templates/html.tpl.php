<!DOCTYPE html>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>

<!-- Open Sans serviced from Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width">

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
    <script type="text/javascript">
      $(".flexnav").flexNav();
    </script>
</body>
</html>
