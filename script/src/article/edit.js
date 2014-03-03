define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			require.async('noncmd-lib/ckeditor/ckeditor', function() {

			});
		}
	});

	module.exports = Page;
});