<header>
    <div class="head-contain">
        <h1>Movies I Havent Seen But Review Anyways</h1>
    </div>
</header>

<div class="sidebar">
    <h3><i class="icon-right-open"></i>Some Movies</h3>
	<ul>
	<?php
	    $recentPosts = new WP_Query();
	    $recentPosts->query('showposts=20');
	?>
	<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
	    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	</ul>
</div>

