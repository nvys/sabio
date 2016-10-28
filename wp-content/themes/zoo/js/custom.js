 /**
   * The Custome Script.
   *
   *
   * @package   zoo WordPress Theme
   * @copyright Copyright (C) 2015, OrdaSoft
   * @license  http://www.gnu.org/licenses/gpl-2.0.html  GNU General Public License v2 or later
   * @author    AUTHOR <www.ordasoft.com>
   * zoo is distributed under the terms of the GNU GPL
   */

jQuery(document).ready(function (){
	var swiper1 = new Swiper('.swiper1', {
        pagination: '.swiper-pagination1',
        nextButton: '.swiper-button-next',
         prevButton: '.swiper-button-prev',
        paginationClickable: true,

         slidesPerView: 1,
         grabCursor: true,
        loop: true
    });
  var swiper2 = new Swiper('.swiper2', {
        pagination: '.swiper-pagination2',
        nextButton: '.swiper-button-next',
         prevButton: '.swiper-button-prev',
        paginationClickable: true,
         slidesPerView: 4,
         grabCursor: true,
        loop: true
    });
  var swiper3 = new Swiper('.swiper3', {
        pagination: '.swiper-pagination3',
        nextButton: '.swiper-button-next',
         prevButton: '.swiper-button-prev',
        paginationClickable: true,
         slidesPerView: 4,
         grabCursor: true,
        loop: true
    });

  var mainMenu = jQuery('ul.main_menu');
  mainMenu.find('li.menu-item-has-children > a').append('<span class="ion-chevron-down"></span>');
  mainMenu.find(' > li').last().addClass('lastChild');


});

jQuery(document).ready( function() {

  jQuery('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      columnWidth: '.grid-sizer'
    }
  });

});

