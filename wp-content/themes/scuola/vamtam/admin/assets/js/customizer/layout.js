/* jshint esnext:true */

import { toggle } from './helpers';

var layout = ( api, $ ) => {
	'use strict';

	api( 'vamtam_theme[full-width-header]', value => {
		value.bind( to => {
			$( '.header-maybe-limit-wrapper' ).toggleClass( 'limit-wrapper', to );
		} );
	} );

	api( 'vamtam_theme[show-empty-header-cart]', value => {
		value.bind( to => {
			document.querySelector( '.cart-dropdown' ).classList.toggle( 'show-if-empty', + to );
			$( 'body' ).trigger( 'wc_fragments_refreshed' );
		} );
	} );
};

export default layout;
