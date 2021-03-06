<?php
/**
 * The template for displaying all pages.
 * Template Name: Submit Quote
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class='submit-quote'>
				<header class="entry-header">
					<?php the_title( sprintf( '<h1 class="entry-title">', '</h1>' )); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php if(is_user_logged_in()&&current_user_can('edit_posts')):?>
						<form id="submit-form">
							<label>Author of Quote</label>
							<input type="text" name="form-author" id="form-author" required />
							<label>Quote</label> <textarea id="form-text" required></textarea>
							<label>Where did you find this quote? (e.g. book name)</label> <input type="text" name="form-source" id="form-source" />
							<label>Provide the URL of the quote source, if availiable</label> <input type="url" name="form-source-url" id="form-source-url" />
							<input type="submit" value="Submit Quote">
						</form>

					<?php else:?>
					
						<p>Sorry, you must be logged in to submit a quote!</p>
						<a href="<?php echo wp_login_url(); ?>">Click here to login.</a>
					<?php endif;?>
				</div><!-- .entry-content -->
			</section>
								

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
