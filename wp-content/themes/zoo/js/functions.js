 /**
   * The file for Custom Script.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license    http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author      AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
   */
//////////////////////////////////////////
( function( jQuery ) {
  var body    = jQuery( 'body' ),
    _window = jQuery( window );


  // Enable menu toggle for small screens.
  ( function() {
    var nav = jQuery( '#primary-navigation' ), button, menu;
    if ( ! nav ) {
      return;
    }

    button = nav.find( '.menu-toggle' );
    if ( ! button ) {
      return;
    }

    // Hide button if menu is missing or empty.
    menu = nav.find( '.nav-menu' );
    if ( ! menu || ! menu.children().length ) {
      button.hide();
      return;
    }

    jQuery( '.menu-toggle' ).on( 'click.zoo', function() {
      nav.toggleClass( 'toggled-on' );
    } );
  } )();
} )( jQuery );

