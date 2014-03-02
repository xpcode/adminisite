define(function(require, exports, module) {

	var $ = require('jquery');
	var Handlebars = require('handlebars');
	var Validator = require('validator');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			var that = this;

			this._validator = new Validator({
				element: 'form',

				onFormValidated: function(err, items, ele) {
					console.log(arguments);
					if (!err) {
						ajax.
					}
				}

			}).addItem({
				element: 'input[name="name"]',
				required: true,
				rule: 'maxlength{max:32}',
				errormessage: '请输入频道名称'
			}).addItem({
				element: 'input[name="chorder"]',
				required: true,
				rule: 'number maxlength{max:5}',
				errormessage: '请输入频道顺序'
			});
		}
	});

	module.exports = Page;
});