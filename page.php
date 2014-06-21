
<div class="main-out">
<div class="main">
<div class="page">
<div class="top">

<?php
get_header(); ?>	


<div class="content">

<?php get_sidebar(); ?>


	
	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php if (has_post_thumbnail()): ?>
			<div id="about-background">
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
				<?php if ($image && isset($image[0])): ?>
					<?php printf('<img src="%s" alt="%s" />', $image[0], get_the_title()); ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
		<section id="column-content">
			<h1 class="page-title"><?php the_title(); ?></h1>
            <div class="the-content">
                <?php the_content(); ?>
            </div>
		</section>
		
	<?php endwhile; ?>
</div>


	<?php get_footer(); ?>
	
	</div>
</div>
</div>
</div>

</body>
</html>