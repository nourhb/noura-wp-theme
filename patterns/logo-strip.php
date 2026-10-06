<?php
/**
 * Title: Logo strip
 * Slug: noura/logo-strip
 * Categories: noura
 * Keywords: logos, clients, marquee, trusted, brands
 * Description: An infinite-scrolling strip of client wordmarks.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.14em"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"mist"} -->
	<p class="has-mist-color has-text-color has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--30);font-size:0.8rem;font-weight:700;letter-spacing:0.14em;text-transform:uppercase">Trusted by thoughtful teams</p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<div class="noura-marquee" aria-hidden="true">
		<div class="noura-marquee-track">
			<span>Northwind</span><span>Atlas &amp; Co.</span><span>Fieldworks</span><span>Lumen Labs</span><span>Brightline</span><span>Meridian</span><span>Craftwork</span><span>Solstice</span><span>Northwind</span><span>Atlas &amp; Co.</span><span>Fieldworks</span><span>Lumen Labs</span><span>Brightline</span><span>Meridian</span><span>Craftwork</span><span>Solstice</span>
		</div>
	</div>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
