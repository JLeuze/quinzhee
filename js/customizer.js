/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Primary color
    wp.customize( 'quinzhee_primary_color', function( value ) {
        value.bind( function( to ) {
            $( '.site-content a' ).css( 'color', to );
            $( '.button' ).css( 'color', to );
            $( '.button.secondary-button' ).css( 'color', '#fff' );
            $( '.main-navigation li li a' ).css( 'color', to );
            $( '.site-content .button' ).css( 'background-color', to );
            $( '.footer-multi-widgets-area .button' ).css( 'background-color', to );
            $( '.main-navigation li.menu-button:last-of-type a' ).css( 'background-color', to );
            $( '.announcement-widget-area' ).css( 'background-color', to );
            $( '.nav-links a' ).css( 'background-color', to );
            $( '.cta-widget-area .widget' ).css( 'border-color', to );
        } );
    });
} )( jQuery );