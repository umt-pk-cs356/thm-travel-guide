
<div class="main-out">
<div class="main">
<div class="page">
<div class="top">

<?php
get_header(); ?>	


<div class="content">

<?php while ( have_posts() ) : the_post(); ?>
			<article class="post post-1 post-single">
				<div class="content" <?php post_class(); ?>>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<div class="post-tags">
						<?php the_tags(); ?>
					</div>
                    <?php if ( has_post_thumbnail() ): ?>
                        <figure class="post-featured-image">
                            <?php the_post_thumbnail('large-featured'); ?>
                        </figure>
                    <?php endif; ?>
					<div class="body">
						<?php the_content(); ?>
					</div>

                    <div class="post-pages">
                        <?php wp_link_pages(); ?>
                    </div>
				</div>
			</article>

			<?php comments_template( '', true ); ?>
			
		<?php endwhile; ?>
</div>


	<?php get_footer(); ?>
	
	</div>
</div>
</div>
</div>

</body>
</html>