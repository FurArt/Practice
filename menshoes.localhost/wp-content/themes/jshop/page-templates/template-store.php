<?php /* Template Name: NoStore */ ?>
<?php get_header(); ?>  
		<div class="content2">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post-main">
		
				<div class="post">
					<?php the_content(); ?><?php comments_template(); ?>
				</div>
			</div>
			<?php endwhile; ?>			
			<?php endif; ?>
		</div>


</div>
</div>
<?php get_footer(); ?>