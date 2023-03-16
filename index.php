<?php get_header(); ?>

  <section class="shortcuts">
    <div class="gov-wrapper">
      <div class="sm-buttons-wrapper">
        <button class="see-more"><i class="fa-solid fa-fire-flame-curved"></i> Serviços mais acessados do <?php bloginfo('name');?></button>
        <button class="see-more"><i class="fa-solid fa-star"></i> Serviços em destaque do <?php bloginfo('name');?></button>
      </div>
      <section class="shortcuts-wrapper">
        <div class="more-access">
          <?php wp_nav_menu(array('theme_location' => 'fourth')); ?>
        </div>
        <div class="top-rated">
          <?php wp_nav_menu(array('theme_location' => 'fifth')); ?>
        </div>
      </section>
    </div>
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




<?php 
   $query1 = new WP_Query( array(
    //  'category_name' => 'news',
      'posts_per_page' => 1,
   )); 
?>
  <?php if ( $query1->have_posts() ) : ?>
    <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
      
      <a id="featured-post" class="bg-overlay" href="<?php echo get_permalink(get_the_ID());?>" style="background-image:url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>')">
        <h3 class="title"><?php the_title(); ?></h3>
        <h4 class="excerpt"><?php the_excerpt();?></h4>
      </a>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <p><?php __('No News'); ?></p>
  <?php endif; ?>


  <?php 
   $query2 = new WP_Query( array(
      'posts_per_page' => 6,
      'offset' => 1
   )); 
?>
<section class="second-grid-post gov-wrapper">
  <?php if ( $query2->have_posts() ) : ?>
    <?php while ( $query2->have_posts() ) : $query2->the_post(); ?>
      
      <a class="grid-post bg-overlay" href="<?php echo get_permalink(get_the_ID());?>" style="background-image:url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );?>')">
      <p class="category-post">
          <?php
            $categories = get_the_category();

            if ( ! empty( $categories ) ) {
              echo esc_html( $categories[0]->name );	
            }
          ?>
        </p>
        <h3 class="title"><?php the_title(); ?></h3>
        <p class="date-post">
          <?php
          $post_date = get_the_date( 'j/m/Y G\hi' ); echo $post_date;
          ?>
        </p>
      </a>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

  <?php else : ?>
    <p><?php __('No News'); ?></p>
  <?php endif; ?>
</section>



  <div class="gov-wrapper flex-center widBanner1">
    <?php dynamic_sidebar('primary');?>
  </div>



<?php 
$query3 = new WP_Query( array(
   'posts_per_page' => 5,
   'offset' => 7
)); 
?>
<section class="third-grid-post gov-wrapper">
<?php if ( $query3->have_posts() ) : ?>
 <?php while ( $query3->have_posts() ) : $query3->the_post(); ?>
   
   <a class="grid-post" href="<?php echo get_permalink(get_the_ID());?>">
   <p class="category-post">
          <?php
            $categories = get_the_category();

            if ( ! empty( $categories ) ) {
              echo esc_html( $categories[0]->name );	
            }
          ?>
        </p>
     <h3 class="title"><?php the_title(); ?></h3>
     <p class="date-post">
        <?php
        $post_date = get_the_date( 'j/m/Y G\hi' ); echo $post_date;
        ?>
      </p>
   </a>

 <?php endwhile; ?>
 <?php wp_reset_postdata(); ?>

<?php else : ?>
 <p><?php __('No News'); ?></p>
<?php endif; ?>
<div href="#" class="grid-post">
  <a href="#" class="btn">Últimas Notícias</a>  
</div>
</section>

<div class="gov-wrapper flex-center widBanner2">
    <?php dynamic_sidebar('second');?>
  </div>

<section class="institutional">
  <div class="gov-wrapper">
    <h2>Institucional</h2>
    <p class="release">
      O Ministério da Agricultura e Pecuária (Mapa) é responsável pela gestão das políticas públicas de estímulo à agropecuária, pelo fomento do agronegócio e pela regulação e normatização de serviços vinculados ao setor. No Brasil, o agronegócio contempla o pequeno, o médio e o grande produtor rural e reúne atividades de fornecimento de bens e serviços à agricultura, produção agropecuária, processamento, transformação e distribuição de produtos de origem agropecuária até o consumidor final.
    </p>
    <?php
      // extract($args);
      $args = array(
        'post_type' => 'institutional',
        'posts_per_page' => -1,
        'order' => 'ASC'
      );
      $inst_query = new WP_Query($args);

      if($inst_query->have_posts()) :
        while($inst_query->have_posts()) :
          $inst_query->the_post();
          $attachment_id = get_post_thumbnail_id();
    ?>
    <a href="<?php echo get_the_excerpt(); ?>" class="inst-card" target="_blank">
      <img src="<?php echo wp_get_attachment_image_src($attachment_id)[0]; ?>" alt="" class="inst-icon">
      <h3 class="title"><?php the_title(); ?></h3>
    </a>
    <?php
      endwhile;
    endif;
    ?>
  </div>
  <?php wp_reset_postdata(); ?>
</section>

<?php get_footer();