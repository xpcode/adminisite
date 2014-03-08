define(function(require, exports, module) {

	var $ = require('$');
	var Validator = require('validator');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			$('.btn-group').on('click', function(e) {
				$('.dropdown-menu', this).toggle();

				$(document).on('click', function() {
					$('.dropdown-menu', this).hide();

					$(this).off('click', arguments.callee);
				});

				e = window.event || e;

				if (window.event) {
					e.cancelBubble = true;
				} else {
					e.stopPropagation();
				}
			});
		}
	});

	module.exports = Page;
});