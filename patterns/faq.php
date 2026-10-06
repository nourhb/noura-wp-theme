<?php
/**
 * Title: FAQ section
 * Slug: noura/faq
 * Categories: noura
 * Keywords: faq, questions, accordion, help, support
 * Description: Frequently asked questions with accessible native disclosure items.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"amber"} -->
		<p class="has-amber-color has-text-color has-text-align-center" style="font-size:0.8rem;font-weight:700;letter-spacing:0.12em;text-transform:uppercase">FAQ</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large","fontWeight":"600"},"spacing":{"margin":{"top":"0"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="margin-top:0;font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--x-large);font-weight:600">Questions, answered.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"slate"} -->
		<p class="has-slate-color has-text-color has-text-align-center" style="line-height:1.6">Everything you might want to know before making Noura your own.</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group">

		<!-- wp:html -->
		<details class="noura-faq-item" open>
			<summary>Do I need coding skills to use Noura?</summary>
			<p>No. Noura is built entirely with core WordPress blocks, so you can compose pages, restyle sections, and rearrange layouts visually in the Site Editor. The code is there if you ever want it — tidy, commented, and easy to extend.</p>
		</details>
		<!-- /wp:html -->

		<!-- wp:html -->
		<details class="noura-faq-item">
			<summary>Will Noura work with my favorite plugins?</summary>
			<p>Yes. Noura uses standard theme APIs and core block markup, which means page builders, SEO plugins, form plugins, and caching tools all work as expected. If a plugin follows WordPress coding standards, it will feel right at home.</p>
		</details>
		<!-- /wp:html -->

		<!-- wp:html -->
		<details class="noura-faq-item">
			<summary>How do I change the colors and fonts?</summary>
			<p>Open Appearance → Editor → Styles. You can switch between the included Midnight and Sahara style variations, tweak the palette, or restyle buttons, headings, and links — every change previews live before you save.</p>
		</details>
		<!-- /wp:html -->

		<!-- wp:html -->
		<details class="noura-faq-item">
			<summary>Is Noura translation-ready?</summary>
			<p>Absolutely. All strings use the <code>noura</code> text domain, the theme ships with a languages folder, and layouts support right-to-left languages. It is also built with semantic landmarks and keyboard-friendly navigation for accessibility.</p>
		</details>
		<!-- /wp:html -->

		<!-- wp:html -->
		<details class="noura-faq-item">
			<summary>What happens to my content if I switch themes later?</summary>
			<p>Nothing is lost. Your posts, pages, and media live in WordPress itself — not in the theme. Switching themes only changes the presentation; your content comes along untouched.</p>
		</details>
		<!-- /wp:html -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
