<?php
/**
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Aste
*/

get_header();
?>


<div id="primary" class="content-area">

  <?php get_template_part( 'template-parts/', 'content') ?>


  <?php the_content(); ?>


  <?php get_template_part( 'template-parts/blocks', 'hero' ); ?>



  <?php 

  $args = array(
    'posts_per_page' => 3,
    'post_type' => 'tapahtumat',
    'post_status' => 'publish',
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) : 


    ?> 
    <section class="section events">
      <div class="container">
        <h2 class="section-title">Tapahtumat</h2>

        <?php while ($query->have_posts()) : 
          $query->the_post(); 
          $date = get_field('tapahtuma_pvm');
          $time = get_field('tapahtuma_alkaa');
          $link = get_field('tapahtuman_linkki');
          ?>
          <div class="columns">

            <div class="column is-2">
              <?php if (!empty($date)): ?>
                <?= $date ?>
              <?php endif ?>
            </div>
            <div class="column is-4-desktop is-5-tablet">
              <figure class="image">
                <img class="is-rounded" src="<?= get_the_post_thumbnail_url( $post->ID, 'large' ); ?>" alt="">
              </figure>
            </div>
            <div class="column is-6">
              <h3><a href="<?= $link; ?>"><?php the_title(); ?></a></h3>
              <p>
                <?= get_field('ingressi'); ?>
              </p>
              <a href="<?= $link; ?>" class="hds-icon hds-icon--size-l hds-icon--arrow-right"></a>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </section>
  <?php endif; ?>


</div>

<?php

get_footer();
