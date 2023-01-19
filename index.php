<?php get_header(); ?>

  <section class="shortcuts">
    <button class="see-more"><i class="fa-solid fa-fire-flame-curved"></i> Serviços mais acessados do <?php bloginfo('name');?></button>
    <button class="see-more"><i class="fa-solid fa-star"></i> Serviços em destaque do <?php bloginfo('name');?></button>
    <section class="shortcuts-wrapper closed">
      <div class="more-access">
        <?php wp_nav_menu(array('theme_location' => 'fourth')); ?>
      </div>
      <div class="top-rated">
        <?php wp_nav_menu(array('theme_location' => 'fifth')); ?>
      </div>
    </section>
  </section>

  <section class="row-social-media">
    <nav class="medias">
      <a href="https://www.instagram.com/governodobrasil" class="media">
        <i class="fa-brands fa-instagram"></i>
      </a>
      <a href="https://www.twitter.com/govbr" class="media">
        <i class="fa-brands fa-twitter"></i>
      </a>
      <a href="https://www.facebook.com/governodobrasil" class="media">
        <i class="fa-brands fa-facebook"></i>
      </a>
      <a href="https://www.youtube.com/governodobrasil" class="media">
        <i class="fa-brands fa-youtube"></i>
      </a>
    </nav>
  </section>



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