<?php
/**
 * Title: Portfolio showcase
 * Slug: noura/portfolio-showcase
 * Categories: noura
 * Keywords: portfolio, gallery, work, projects, showcase
 * Description: Alternating project rows with images and descriptions — ideal for a portfolio page.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"},"color":{"text":"var:preset|color|amber"}}} -->
		<p class="has-text-align-center has-amber-color has-text-color" style="font-size:0.8rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Selected work</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large)">Projects I'm proud of</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"noura-zoom","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-large noura-zoom" style="border-radius:14px"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=900&q=80" alt="Analytics dashboard project screenshot" style="border-radius:14px"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"},"color":{"text":"var:preset|color|amber"}}} -->
				<p class="has-amber-color has-text-color" style="font-size:0.8rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase">WordPress · WooCommerce</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.6rem"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.6rem">Bloom Studio storefront</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|slate"}}} -->
				<p class="has-slate-color has-text-color">A headless-inspired WooCommerce build with custom Gutenberg blocks for lookbooks. Load time cut by 62%, mobile conversion up 40%.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">View case study</a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"},"color":{"text":"var:preset|color|amber"}}} -->
				<p class="has-amber-color has-text-color" style="font-size:0.8rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase">React · Node.js</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.6rem"}}} -->
				<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--display);font-size:1.6rem">Northbeam analytics app</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|slate"}}} -->
				<p class="has-slate-color has-text-color">Real-time marketing dashboard with a component library of 40+ reusable parts. Shipped in six weeks with full test coverage.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">View case study</a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"noura-zoom","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-large noura-zoom" style="border-radius:14px"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=900&q=80" alt="Analytics app dashboard interface" style="border-radius:14px"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
