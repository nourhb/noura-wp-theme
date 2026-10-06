<?php
/**
 * Title: Call to action banner
 * Slug: noura/cta-banner
 * Categories: noura
 * Keywords: cta, call to action, banner, contact
 * Description: A bold dark banner with a headline, supporting text, and two action buttons.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"gradient":"ink-to-navy","textColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-color has-ink-to-navy-gradient-background has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","lineHeight":"1.2"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);line-height:1.2">Have a project in mind? <span style="color:var(--wp--preset--color--amber-light)">Let's build it together.</span></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|mist"},"typography":{"fontSize":"var:preset|font-size|large"}}} -->
		<p class="has-text-align-center has-mist-color has-text-color" style="font-size:var(--wp--preset--font-size--large)">I take on a limited number of projects each month — tell me about yours and get a reply within 24 hours.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
			<!-- wp:button {"backgroundColor":"amber","textColor":"ink","className":"is-style-shadow"} -->
			<div class="wp-block-button is-style-shadow"><a class="wp-block-button__link has-ink-color has-amber-background-color has-text-color has-background wp-element-button" href="#">Start your project</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-color:var(--wp--preset--color--paper);color:var(--wp--preset--color--paper)">See pricing</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
