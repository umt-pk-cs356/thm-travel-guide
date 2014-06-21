<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Travel_guide
 * @since Travelguide 1.0
 */
?>

<div class="main-out">
<div class="main">
<div class="page">
<div class="top">

<?php
get_header(); ?>	


<div class="content">


		<?php if ( ! have_posts() ) : ?>
		<h1>Not Found</h1>
			<p>Pardon, but no results were found for the requested archive.</p>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

</div>


	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="dots"></div>
	
	<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>
	<?php else : ?>
			<?php the_content('Read More'); ?>
	<?php endif; ?>
	





		


</div>
</div>
</div>
</div>

</body>
</html>