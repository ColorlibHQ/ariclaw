<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Ariclaw
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */


?>

	<article id="post_<?php the_ID(); ?>" <?php post_class('masonry__brick entry format-video'); ?> data-aos="fade-up">
		<?php 
		/**
		 * Blog Post thumbnail
		 * @Hook  ariclaw_blog_posts_thumb
		 *
		 * @Hooked ariclaw_blog_posts_thumb_cb
		 * 
		 *
		 */
		do_action( 'ariclaw_blog_posts_thumb' );

		// Content wrapper start
		echo '<div class="entry__text">';
			echo '<div class="entry__header">';
		/**
		 * Blog Post Meta
		 * @Hook  ariclaw_blog_posts_meta
		 *
		 * @Hooked ariclaw_blog_posts_meta_cb
		 * 
		 *
		 */
		do_action( 'ariclaw_blog_posts_meta' );

		/**
		 * Blog Post title
		 * @Hook  ariclaw_blog_posts_title
		 *
		 * @Hooked ariclaw_blog_posts_title_cb
		 * 
		 *
		 */
		do_action( 'ariclaw_blog_posts_title' );

		echo '</div>';
		
		/**
		 * Blog Excerpt With read more button
		 * @Hook  ariclaw_blog_posts_excerpt
		 *
		 * @Hooked ariclaw_blog_posts_excerpt_cb
		 * 
		 *
		 */
		do_action( 'ariclaw_blog_posts_excerpt' );

		echo '</div>'; // Content wrapper end
		
		?>
	</article> <!-- end article -->