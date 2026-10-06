/**
 * Noura theme scripts.
 *
 * - Back-to-top button visibility and smooth scrolling.
 * - Animated count-up for stat numbers in the stats band pattern.
 *
 * @package Noura
 * @since   1.1.0
 */

(function () {
	'use strict';

	var prefersReducedMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;

	/* Back-to-top button: reveal after scrolling, scroll smoothly to top. */
	var backToTop = document.querySelector( '.noura-back-to-top' );

	if ( backToTop ) {
		var toggleVisibility = function () {
			backToTop.classList.toggle( 'is-visible', window.scrollY > 600 );
		};

		window.addEventListener( 'scroll', toggleVisibility, { passive: true } );
		toggleVisibility();

		backToTop.addEventListener( 'click', function () {
			window.scrollTo( {
				top: 0,
				behavior: prefersReducedMotion ? 'auto' : 'smooth',
			} );
		} );
	}

	/* Stat counters: count up when the numbers scroll into view. */
	var counters = document.querySelectorAll( '.noura-stat-number[data-count]' );

	if ( ! counters.length ) {
		return;
	}

	var animateCounter = function ( el ) {
		var target = parseInt( el.getAttribute( 'data-count' ), 10 );
		var suffix = el.getAttribute( 'data-suffix' ) || '';

		if ( prefersReducedMotion || isNaN( target ) ) {
			el.textContent = target + suffix;
			return;
		}

		var duration = 1400;
		var startTime = null;

		var step = function ( timestamp ) {
			if ( ! startTime ) {
				startTime = timestamp;
			}

			var progress = Math.min( ( timestamp - startTime ) / duration, 1 );
			var eased = 1 - Math.pow( 1 - progress, 3 );

			el.textContent = Math.round( target * eased ) + suffix;

			if ( progress < 1 ) {
				window.requestAnimationFrame( step );
			}
		};

		window.requestAnimationFrame( step );
	};

	if ( 'IntersectionObserver' in window ) {
		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						animateCounter( entry.target );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.4 }
		);

		counters.forEach( function ( counter ) {
			observer.observe( counter );
		} );
	} else {
		counters.forEach( animateCounter );
	}
})();
