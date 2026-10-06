<?php
/**
 * Title: Latest posts grid
 * Slug: noura/latest-posts-grid
 * Categories: noura
 * Keywords: posts, blog, latest, grid, news
 * Description: Section heading plus a 3-column grid of the latest posts with featured images.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-cream-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"},"color":{"text":"var:preset|color|amber"}}} -->
			<p class="has-amber-color has-text-color" style="font-size:0.8rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Journal</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large"},"spacing":{"margin":{"top":"0"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:0;font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large)">Latest articles</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">View all articles →</a></div><!-- /wp:button --></div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:latest-posts {"postsToShow":3,"displayPostContent":false,"displayPostDate":true,"postLayout":"grid","columns":3,"displayFeaturedImage":true,"featuredImageSizeSlug":"medium","addLinkToFeaturedImage":true,"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->

</div>
<!-- /wp:group -->
