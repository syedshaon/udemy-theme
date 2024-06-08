<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
   
</head>
<body <?php body_class('example'); ?> >
  <h1>Hello World!</h1>

 <?php wp_body_open(  ); ?>

  <?php wp_footer(); ?>
</body>
</html>