<?php
/**
 * Title: Hero — split layout
 * Slug: noura/hero-split
 * Categories: noura
 * Keywords: hero, banner, intro, header
 * Description: A split hero with an eyebrow label, display headline, supporting copy, two calls to action, and a framed image.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"verticalAlignment":"center"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","className":"noura-entrance","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column is-vertically-aligned-center noura-entrance">

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"},"color":{"text":"var:preset|color|amber"}}} -->
			<p class="has-amber-color has-text-color" style="font-size:0.8rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Welcome to Noura</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|hero","fontWeight":"600","letterSpacing":"-0.02em","lineHeight":"1.05"},"spacing":{"margin":{"top":"0"}}}} -->
			<h1 class="wp-block-heading" style="margin-top:0;font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--hero);font-weight:600;letter-spacing:-0.02em;line-height:1.05">Design that speaks <em style="color:var(--wp--preset--color--amber);font-style:italic">before</em> you do.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large","lineHeight":"1.6"},"color":{"text":"var:preset|color|slate"}}} -->
			<p class="has-slate-color has-text-color" style="font-size:var(--wp--preset--font-size--large);line-height:1.6">Noura is a refined WordPress block theme for portfolios, agencies, and creators — generous whitespace, editorial typography, and patterns that make beautiful pages effortless.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"className":"noura-hero-buttons","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-buttons noura-hero-buttons">
				<!-- wp:button {"className":"is-style-shadow"} -->
				<div class="wp-block-button is-style-shadow"><a class="wp-block-button__link wp-element-button" href="#">View my work</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline-amber"} -->
				<div class="wp-block-button is-style-outline-amber"><a class="wp-block-button__link wp-element-button" href="#">Get in touch</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"var:preset|color|mist"}}} -->
				<p class="has-mist-color has-text-color" style="font-size:0.85rem">★★★★★</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"var:preset|color|slate"}}} -->
				<p class="has-slate-color has-text-color" style="font-size:0.85rem">Trusted by 120+ happy clients worldwide</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-framed"} -->
			<figure class="wp-block-image size-large is-style-framed"><img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=900&q=80" alt="A modern workspace with a laptop showing a website design"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
