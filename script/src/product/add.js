define(function(require, exports, module) {

	var $ = require('jquery');
	var Handlebars = require('handlebars');
	var Validator = require('validator');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);
		}
	});

	module.exports = Page;
});