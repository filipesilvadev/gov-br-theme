<?php get_header(); ?>
  
  <h2><?php bloginfo('description');?></h2>
  
  <header class="main-header">
    <h1 class="main-logo"><?php bloginfo('name');?></h1>
  </header>

  <!-- Loop de Posts -->
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
<?php dynamic_sidebar('primary');?>

<?php get_footer();