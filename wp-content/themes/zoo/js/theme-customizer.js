 /**
   * The Customize Theme Script.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license  http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author    AUTHOR <www.ordasoft.com>
   * themeslug is distributed under the terms of the GNU GPL
   */
( function( $ ) {
	//Body font
	wp.customize( 'zoo_body_font', function( value ) {
		value.bind( function( newval ) {
			$('body').css('font-family', newval );
		} );
	} );
	//Body font links
	wp.customize( 'zoo_body_links_font', function( value ) {
		value.bind( function( newval ) {
			$('body a').css('font-family', newval );
		} );
	} );
	//Body font color
	wp.customize( 'zoo_font_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('color', newval );
		} );
	} );
	//Body font size
	wp.customize( 'zoo_font_size', function( value ) {
		value.bind( function( newval ) {
			$('body').css('font-size', newval );
		} );
	} );
	//Body link size
	wp.customize( 'zoo_links_size', function( value ) {
		value.bind( function( newval ) {
			$('body a').css('font-size', newval );
		} );
	} );

	//Body links color
	wp.customize( 'zoo_link_color', function( value ) {
		value.bind( function( newval ) {
			$('body a').css('color', newval );
		} );
	} );

	//Body links hover color
	wp.customize( 'zoo_link_hover_color', function( value ) {
		value.bind( function( newval ) {
			$('body a:hover').css('color', newval );
		} );
	} );

	//Body links decoration
	wp.customize( 'zoo_link_underline', function( value ) {
		value.bind( function( newval ) {
			$('body a').css('text-decoration', newval );
		} );
	} );
	//Body links hover decoration
	wp.customize( 'zoo_link_underline_hover', function( value ) {
		value.bind( function( newval ) {
			$('body a:hover').css('text-decoration', newval );
		} );
	} );




	//Main menu
	wp.customize( 'zoo_main_font_size', function( value ) {
		value.bind( function( newval ) {
			$('ul.main_menu.nav.navbar-nav > li > a').css('font-size', newval );
		} );
	} );

	wp.customize( 'zoo_main_font_size', function( value ) {
		value.bind( function( newval ) {
			$('.collapse ul > li > a').css('font-size', newval);
		} );
	} );
	wp.customize( 'zoo_main_font_size', function( value ) {
		value.bind( function( newval ) {
			$('.nav-menu ul > li > a').css('font-size', newval );
		} );
	} );

	wp.customize( 'zoo_main_color', function( value ) {
		value.bind( function( newval ) {
			$('ul.main_menu.nav.navbar-nav > li > a').css('color', newval );
		} );
	} );
	wp.customize( 'zoo_main_color', function( value ) {
		value.bind( function( newval ) {
			$('.collapse ul > li > a').css('color', newval );
		} );
	} );
	wp.customize( 'zoo_main_color', function( value ) {
		value.bind( function( newval ) {
			$('.nav-menu ul > li > a').css('color', newval );
		} );
	} );

	wp.customize( 'zoo_main_underline', function( value ) {
		value.bind( function( newval ) {
			$('ul.main_menu.nav.navbar-nav > li > a').css('text-decoration', newval );
		} );
	} );
	wp.customize( 'zoo_main_underline', function( value ) {
		value.bind( function( newval ) {
			$('.collapse ul > li > a').css('text-decoration', newval );
		} );
	} );
	wp.customize( 'zoo_main_underline', function( value ) {
		value.bind( function( newval ) {
			$('.nav-menu ul > li > a').css('text-decoration', newval );
		} );
	} );
	wp.customize( 'zoo_main_underline_hover', function( value ) {
		value.bind( function( newval ) {
			$('ul.main_menu.nav.navbar-nav > li > a:hover').css('text-decoration', newval );
		} );
	} );
	wp.customize( 'zoo_main_underline_hover', function( value ) {
		value.bind( function( newval ) {
			$('.collapse ul > li > a:hover').css('text-decoration', newval );
		} );
	} );
	wp.customize( 'zoo_main_underline_hover', function( value ) {
		value.bind( function( newval ) {
			$('.nav-menu ul > li > a:hover').css('text-decoration', newval );
		} );
	} );

	wp.customize( 'zoo_main_font_size', function( value ) {
		value.bind( function( newval ) {
			$('ul.main_menu.nav.navbar-nav > li > a').css('font-family', newval );
		} );
	} );
wp.customize( 'zoo_main_font_size', function( value ) {
		value.bind( function( newval ) {
			$('.collapse ul > li > a').css('font-family', newval );
		} );
	} );
wp.customize( 'zoo_main_font_size', function( value ) {
		value.bind( function( newval ) {
			$('.nav-menu ul > li > a').css('font-family', newval );
		} );
	} );

	wp.customize( 'zoo_main_hover_color', function( value ) {
		value.bind( function( newval ) {
			$('ul.main_menu.nav.navbar-nav > li > a:hover').css('color', newval );
		} );
	} );
	wp.customize( 'zoo_main_hover_color', function( value ) {
		value.bind( function( newval ) {
			$('.collapse ul > li > a:hover').css('color', newval );
		} );
	} );
	wp.customize( 'zoo_main_hover_color', function( value ) {
		value.bind( function( newval ) {
			$('.nav-menu ul > li > a').css('color', newval );
		} );
	} );



	// typography

	wp.customize( 'zoo_advanced_settings_h1', function( value ) {
		value.bind( function( newval ) {
			$('body h1').css('font-family', newval );
		} );
	} );

	wp.customize( 'zoo_advanced_settings_h2', function( value ) {
			value.bind( function( newval ) {
				$('body h2').css('font-family', newval );
			} );
		} );

	wp.customize( 'zoo_advanced_settings_h3', function( value ) {
		value.bind( function( newval ) {
			$('body h3').css('font-family', newval );
		} );
	} );

	wp.customize( 'zoo_advanced_settings_h4', function( value ) {
			value.bind( function( newval ) {
				$('body h4').css('font-family', newval );
			} );
		} );

	wp.customize( 'zoo_advanced_settings_h5', function( value ) {
		value.bind( function( newval ) {
			$('body h5').css('font-family', newval );
		} );
	} );

	wp.customize( 'zoo_advanced_settings_h6', function( value ) {
			value.bind( function( newval ) {
				$('body h6').css('font-family', newval );
			} );
		} );



//social links-------------------

	wp.customize( 'zoo_social_links_font_size', function( value ) {
		value.bind( function( newval ) {
			$('.soc_links a').css('font-size', newval );
		} );
	} );

	wp.customize( 'zoo_social_links_color', function( value ) {
		value.bind( function( newval ) {
			$('.soc_links a').css('color', newval );
		} );
	} );

	wp.customize( 'zoo_social_links_hover_color', function( value ) {
		value.bind( function( newval ) {
			$('.soc_links a:hover').css('color', newval );
		} );
	} );

	//Copyright-------------------

	wp.customize( 'zoo_copyright_text', function( value ) {
			value.bind( function( newval ) {
				$('div#copyright a').html( newval );
			} );
		} );

	wp.customize( 'zoo_copyright_font', function( value ) {
			value.bind( function( newval ) {
				$('div#copyright a').css('font-family', newval );
			} );
		} );
	wp.customize( 'zoo_copyright_font_size', function( value ) {
		value.bind( function( newval ) {
			$('div#copyright a').css('font-size', newval );
		} );
	} );

	wp.customize( 'zoo_copyright_color', function( value ) {
		value.bind( function( newval ) {
			$('div#copyright a').css('color', newval );
		} );
	} );

	wp.customize( 'zoo_copyright_hover_color', function( value ) {
		value.bind( function( newval ) {
			$('div#copyright a:hover').css('color', newval );
		} );
	} );

	wp.customize( 'zoo_copyright_link_underline', function( value ) {
		value.bind( function( newval ) {
			$('div#copyright a').css('text-decoration', newval );
		} );
	} );

	wp.customize( 'zoo_copyright_link_hover_underline', function( value ) {
		value.bind( function( newval ) {
			$('div#copyright a:hover').css('text-decoration', newval );
		} );
	} );
	//mail-------------------

  wp.customize( 'zoo_mail_font', function( value ) {
      value.bind( function( newval ) {
        $('#mail a').css('font-family', newval );
      } );
    } );
  wp.customize( 'zoo_mail_font_size', function( value ) {
    value.bind( function( newval ) {
      $('#mail a').css('font-size', newval );
    } );
  } );

  wp.customize( 'zoo_mail_color', function( value ) {
    value.bind( function( newval ) {
      $('#mail a').css('color', newval );
    } );
  } );

} )( jQuery );

