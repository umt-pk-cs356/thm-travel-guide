<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Travelguide
 * @since Travelguide 1.0
 */
?>



<!--head>
  <meta charset="UTF-8">
  <title>Title goes here</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <!link href="style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="<?php get_stylesheet_uri('style.css'); ?>" type="text/css" />  
</head-->


<div class="main-out">
<div class="main">
<div class="page">
<div class="top">

<?php
get_header(); ?>	


<div class="content">

<?php get_sidebar(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-header">
	<div class="date"><?php the_time( 'M j y' ); ?></div>
	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<div class="author"><?php the_author(); ?></div>
	</div><!--end post header-->
	<div class="entry clear">
	<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
	<?php the_content(); ?>
	<?php edit_post_link(); ?>
	<?php wp_link_pages(); ?>
	</div><!--end entry-->
	<div class="post-footer">
	<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
	</div><!--end post footer-->
	</div><!--end post-->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	<div class="navigation index">
	<div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
	<div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
	</div><!--end navigation-->
	<?php else : ?>
	<?php endif; ?>


<div class="content-left">


<div class="row2">


<div class="section1">
<h2 class="subtitle">Feed</h2>
<p><strong>Hey user,</strong><br>

Give your feedback at smzr5@live.com</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</div>


<div class="section2">
<h2 class="subtitle">Details</h2>
<p><strong>World travel guide is a website for your joyful and calm travels and tourism.</strong><br>
You will experience much comfort and easyness like never before.
</p>
<p>&nbsp;</p>

</div>
</div>
</div>




</div>


	<?php get_footer(); ?>
	
	</div>
</div>
</div>
</div>

</body>
</html>