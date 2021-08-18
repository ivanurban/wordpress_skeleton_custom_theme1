<?php /* Template Name: CustomPageT1 */ ?>


			<?php get_header();?>




			<div class="container-fluid pt-5 pb-5">
				

				<h1 style="text-align: center"><?php the_title();?></h1>



				<?php if (have_posts()) : while(have_posts()) : the_post();?>


					<?php the_content();?>


				<?php endwhile; endif;?>


			</div>


			<?php get_footer();?>

