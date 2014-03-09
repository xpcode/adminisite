define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			var banner = $('.banner');

			$('li', banner).each(function(i) {
				$(this).on('click', function() {
					$(this).addClass("active").siblings().removeClass("active");
					$('img:eq(' + i + ')', banner).removeClass("hide").siblings('img').addClass("hide");
				});
			})
		}
	});

	module.exports = Page;
});