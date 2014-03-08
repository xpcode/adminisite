define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('../base');
	var ArticleList = require('../article/list');

	var Page = BasePage.extend({
		Implements: ArticleList,

		initialize: function() {
			Page.superclass.initialize.call(this);

			this.bindDeleteEvent();
		}
	});

	module.exports = Page;
});