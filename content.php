<div class="post-styling">
	<div class="thumbnail-container"><?php the_post_thumbnail("thumbnail"); ?></div>

	<div class="post-text-container">
		<h3><?php the_title(); ?></h3>
		<h6 class="date-styling"><i> - <?php the_time("F Y"); ?></i></h6>
		<div><?php the_content(); ?></div>
	</div>
</div>