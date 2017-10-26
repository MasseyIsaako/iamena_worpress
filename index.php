<?php get_header(); ?>
	<div id="home-wrapper">
		<div class="nav-container">
			<h1>Journal</h1>
			<div id="ena-logo"></div>
			<?php get_sidebar(); ?>
		</div>

		<div id="header-image-container">
			<img src="<?php header_image(); ?>">
			<div id="header-container-overlay">
				<p>A Carefully Curated Gathering Of Our Thoughts And Inspiration.
				<br>
				<br>
				The ENA Journal Is Our Celebration Of Mood And Muse, Building An Elevated Edit Of Thoughtful Beauty.</p>
				<a href="#posts-container"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>

	<div id="posts-container">
		<?php if (have_posts()): ?>
			<?php while(have_posts()): the_post(); ?>
				<?php get_template_part("content", get_post_format()); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<div id="footer">
		<p>This is the footer</p>
	</div>

<?php get_footer(); ?>