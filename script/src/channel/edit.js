define(function(require, exports, module) {

	var $ = require('$');
	var Validator = require('validator');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			$('a[data-action="delete"]').on('click', function() {
				return confirm('确实要删除吗?');
			});
		}
	});

	module.exports = Page;
});