<?php
/**
 * Title: Pricing table
 * Slug: noura/pricing-table
 * Categories: noura
 * Keywords: pricing, plans, table, tiers
 * Description: Three pricing tiers with a highlighted "most popular" plan.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"},"color":{"text":"var:preset|color|amber"}}} -->
		<p class="has-text-align-center has-amber-color has-text-color" style="font-size:0.8rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Pricing</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large)">Simple, honest pricing</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|slate"}}} -->
		<p class="has-text-align-center has-slate-color has-text-color">No hidden fees. No surprises. Just great work.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card noura-card","style":{"border":{"radius":"14px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card noura-card has-white-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="font-size:1.1rem;font-weight:700">Starter</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"2.5rem","fontWeight":"700","lineHeight":"1"}}} -->
				<p style="font-family:var(--wp--preset--font-family--display);font-size:2.5rem;font-weight:700;line-height:1">$490</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"var:preset|color|mist"}}} -->
				<p class="has-mist-color has-text-color" style="font-size:0.9rem">Perfect for a polished one-pager.</p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"style":{"typography":{"fontSize":"0.95rem"},"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
				<ul class="wp-block-list" style="font-size:0.95rem">
					<!-- wp:list-item --><li>✓ 1-page custom design</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Mobile responsive</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Contact form setup</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Basic SEO</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","width":100} --><div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Choose Starter</a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card noura-card","style":{"border":{"radius":"14px","color":"var:preset|color|amber"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card noura-card has-paper-color has-ink-background-color has-text-color has-background" style="border-radius:14px;border-color:var(--wp--preset--color--amber);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"},"color":{"text":"var:preset|color|amber-light"},"spacing":{"margin":{"bottom":"0"}}}} -->
				<p class="has-text-align-center has-amber-light-color has-text-color" style="margin-bottom:0;font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Most popular</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontSize":"1.1rem","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading has-text-align-center" style="font-size:1.1rem;font-weight:700">Business</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"2.5rem","fontWeight":"700","lineHeight":"1"}}} -->
				<p class="has-text-align-center" style="font-family:var(--wp--preset--font-family--display);font-size:2.5rem;font-weight:700;line-height:1">$1,290</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"var:preset|color|mist"}}} -->
				<p class="has-text-align-center has-mist-color has-text-color" style="font-size:0.9rem">The complete package for growing brands.</p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"style":{"typography":{"fontSize":"0.95rem"},"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
				<ul class="wp-block-list" style="font-size:0.95rem">
					<!-- wp:list-item --><li>✓ Up to 8 custom pages</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Blog + CMS setup</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Speed optimization</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Advanced SEO</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ 30 days of support</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"amber","textColor":"ink","className":"is-style-shadow","width":100} --><div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-shadow"><a class="wp-block-button__link has-ink-color has-amber-background-color has-text-color has-background wp-element-button" href="#">Choose Business</a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"is-style-card noura-card","style":{"border":{"radius":"14px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card noura-card has-white-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"700"}}} -->
				<h3 class="wp-block-heading" style="font-size:1.1rem;font-weight:700">E-commerce</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"2.5rem","fontWeight":"700","lineHeight":"1"}}} -->
				<p style="font-family:var(--wp--preset--font-family--display);font-size:2.5rem;font-weight:700;line-height:1">$2,490</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"var:preset|color|mist"}}} -->
				<p class="has-mist-color has-text-color" style="font-size:0.9rem">A full online store, ready to sell.</p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"style":{"typography":{"fontSize":"0.95rem"},"spacing":{"blockGap":"var:preset|spacing|10"}}} -->
				<ul class="wp-block-list" style="font-size:0.95rem">
					<!-- wp:list-item --><li>✓ WooCommerce setup</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Payments + shipping</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Product page design</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ Training session</li><!-- /wp:list-item -->
					<!-- wp:list-item --><li>✓ 60 days of support</li><!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","width":100} --><div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Choose E-commerce</a></div><!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
