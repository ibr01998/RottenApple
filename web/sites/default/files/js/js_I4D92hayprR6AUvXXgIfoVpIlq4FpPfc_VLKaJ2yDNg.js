/**
 * @file
 * Js helper for Rate.
 *
 * After unvoting ratio button must be un-checked but it became impossible to
 * do with pure Drupal ajax.
 *
 * @todo: Related to https://www.drupal.org/project/drupal/issues/994360
 * so this js could be removed if fixed in core.
 */

(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.rateUnvoteHelper = {
    attach: function (context, settings) {

      $('table.rating-table', context).each(function () {
        var $this = $(this);
        var $ratesVotes = $this.find('.rate-voted');
        if ($ratesVotes.length === 0) {
          $this.find('input:radio').attr('checked', false);
        }
      });
    }
  };
})(jQuery, Drupal);
;
/**
 * @file
 * Modifies the Rate fivestar rating.
 */

(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.fiveStarRating = {
    attach: function (context, settings) {
      $('body').find('.fivestar-rating-wrapper').each(function () {
        $(this).find('.fivestar-rating-input:checked').each(function (i) {
          $(this).parents('div').prevAll().addBack().children('label').addClass('full');
        });

        // If element is editable, enable hover and click.
        var isEdit = $(this).attr('can-edit');
        if (isEdit === 'true') {
          $(this).find('label')
            .click(function (e) {
              $(this).parents('div').prevAll().addBack().children('label').addClass('full');
              $(this).parents('div').nextAll().children('label').removeClass('full');
              $(this).find('input').prop('checked', true);
              $(this).closest('form').find('.form-submit').trigger('click');
            })
            .hover(function () {
              $(this).css('cursor', 'pointer'); // Cursor to pointer.
              $(this).parents('div').prevAll().addBack().children('label').addClass('hover');
            },
            function () {
              $(this).parents('div').prevAll().addBack().children('label').removeClass('hover');
            });
        }
        else {
          $(this).find('label').css('cursor', 'default'); // Cursor to arrow.
        }
      });
    }
  };
})(jQuery, Drupal);
;
