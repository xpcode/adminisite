define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			$('div.imgblock-list-item').on('mouseenter', function() {
				$(this).removeClass("border-ccc");
			}).on('mouseleave', function() {
				$(this).addClass("border-ccc");
			})
		}
	});

	module.exports = Page;
});