

					<?php get_header();?>



					<!-- 
					<section class="cover_image">
						

					</section> -->


					<div class="container-fluid cover_image remove_padding">
						

					<!-- 	<h1><?//php the_title();?></h1>
					-->


						

								<?php if (have_posts()) : while(have_posts()) : the_post();?>


									<?php the_content();?>


								<?php endwhile; endif;?>
							

					</div>



					<main class="front-page">
						

						<section class="fp-1">
							

						</section>




					</main>



					<?php get_footer();?>









