<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
  <title>GovBR</title>
</head>
<body>
  
  <h1><?php bloginfo('name');?></h1>
  <h2><?php bloginfo('description');?></h2>

  <?php
    if (have_posts()) :
      while (have_posts()) : 
        the_post();
  ?>
      <h3><?php the_title();?></h3>
      <div>
        <?php the_content();?>
      </div>
    <?php
      endwhile;
    else:
      ?>
        <h3>Sem publicações no momento.</h3>
      <?php
    endif;
    ?>

  <?php wp_footer();?>
</body>
</html>