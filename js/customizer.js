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
            $( 'a' ).css( 'color', to );
            $( '.button' ).css( 'background-color', to );
            $( '#announcement-area' ).css( 'background-color', to );
            $( '.nav-links a' ).css( 'background-color', to );
            $( '#cta-area .widget' ).css( 'border-color', to );
        } );
    });
} )( jQuery );
