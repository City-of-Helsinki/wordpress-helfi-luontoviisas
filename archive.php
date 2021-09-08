<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bulmascores
 */

get_header(); ?>

<?php 
$term = get_queried_object();
$image = get_field('category_image' , $term); 
?>



<div id="primary" class="mt-2 mb-2">

	<main id="main" class="site-main">


		<div class="container">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
		</div>


		<div class="container container-inner">
			<div class="section">
				<header class="page-header mb-2">
					<?php
					the_archive_title( '<h1 class="section-title is-1">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->
			</div>
		</div>


		<section class="hero alignfull wave-bottom bc-valkoinen" style="background-image:url('<?= $image ?>'); height: 400px;">
		</section>


		<div class="container">
			<section class="section">
				<?php
				$category = get_queried_object();
				$cat_id = $category->term_id;

				$args = array(
					'posts_per_page' => 9,
					'cat' => $cat_id,
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) : ?> 

					<section class="section latest">
						<h2 class="title"><?php the_archive_title( '<h2 class="section-title is-2">', '</h2>' ); ?></h2>
						<div class="columns is-multiline">
							<?php while ($query->have_posts()) : 
								$query->the_post(); ?>


								<div class="column is-4">
									<a href="<?php the_permalink(); ?>">
										<figure class="image is-3by2">
											<img class="is-square" src="<?= get_the_post_thumbnail_url( $post->ID, 'large' ); ?>" alt="">
										</figure>
										<div class="text-content">
											<h3 class="title is-4 is-medium"><?php the_title(); ?></h3>
											<div class="hds-icon hds-icon--size-l hds-icon--arrow-right"></div>
										</div>
									</a>
								</div>


							<?php endwhile; ?> 
						</div>
					</section>
				<?php endif; ?>
			</section>
		</div>


		<div class="container container-inner">
			<section class="section">
				<div class="content">
					<figure class="has-text-left">
						<blockquote>
							"Tähän komponenttiin voi lisätä kiinnostavan lainauksen"
						</blockquote>
						<figcaption>Etunimi, Sukunimi, Titteli</figcaption>
					</figure>
				</div>
			</section>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

