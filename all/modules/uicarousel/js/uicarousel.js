/* $Id: uicarousel.js,v 1.4 2010/02/01 20:26:23 neclimdul Exp $ */

/**
 * @file
 * Provides the jQuery UI Carousel Drupal behavior.
 */

/**
 * The jQuery UI Carousel Drupal behavior.
 *
 * Creates carousels based on the elements of Drupal.settings.uicarousel.
 */
Drupal.behaviors.uicarousel = function(context) {
  // Make sure carousel's are actually available.
  if (typeof $.ui.carousel === undefined) return;

  // Make sure the environment is sane.
  if (typeof Drupal.settings.uicarousel === undefined) return;

  // Iterate through each selector and add the carousel.
  $.each(Drupal.settings.uicarousel, function(selector, options) {
	  
    // Create the carousel on non-processed elements.
    $(selector + ':not(.uicarousel-processed)', context)
      .addClass('uicarousel-processed')
      .carousel(options);
  });
};
